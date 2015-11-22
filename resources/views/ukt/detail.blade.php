@extends('master')
@section('content')
    @if(session('pesan'))
        <div class="alert alert-success">{{session('pesan')}}</div>
    @endif
    <h1>UKT {{$prodi->NamaProdi}}</h1>
    <?php
        $judul = ['SNMPTN','SBMPTN','MANDIRI'];
        $ukts = [$snmptn,$sbmptn,$um];
    ?>
    {!! csrf_field() !!}
    @for($i=0;$i<3;$i++)
        <h3>{{$judul[$i]}}</h3>
        @if($ukts[$i]->count() > 0)
            <table class="table table-hover">
                @foreach($ukts[$i] as $ukt)
                    <tbody>
                    <tr>
                        <td>{{$ukt->golongan->NamaGolongan}}</td>
                        <td id="nominal{{$ukt->UKTID}}">{{$ukt->Nominal}}</td>
                        <td><button class="btn btn-primary" id="edit{{$ukt->UKTID}}">Edit</button></td>
                    </tr>
                    </tbody>
                    <script type="text/javascript">
                        $('#edit{{$ukt->UKTID}}').click(function(){
                            var caption = $('#edit{{$ukt->UKTID}}').html();
                            if (caption == "Edit"){
                                var curent = $('#nominal{{$ukt->UKTID}}').html();
                                $('#nominal{{$ukt->UKTID}}').html("<input id=\"isian{{$ukt->UKTID}}\" type=\"text\" value=\""+curent+"\">");
                                $('#edit{{$ukt->UKTID}}').html("Update");
                            }else{
                                var isian = $('#isian{{$ukt->UKTID}}').val();
                                var CSRF_TOKEN = $('input[name=_token]').val();
                                $.ajax({
                                    url: "/ukt/edit",
                                    type: "post",
                                    data: {
                                        _token: CSRF_TOKEN,
                                        nominal: isian,
                                        uktId: '{{ $ukt->UKTID }}}'
                                    },
                                    success : function(data){
                                        $('#nominal{{$ukt->UKTID}}').html(data);
                                        $('#edit{{$ukt->UKTID}}').html("Edit");
                                    }
                                });
                            }
                        });
                    </script>
                @endforeach
            </table>
        @else
            <a href="/ukt/add/{{$prodi->ProdiID}}/{{$i}}" class="btn btn-primary">ISI UKT</a>
        @endif
    @endfor


@endsection