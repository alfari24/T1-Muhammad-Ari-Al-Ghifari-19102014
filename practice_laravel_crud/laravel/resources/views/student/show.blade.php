<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <title>Biodata {{$student->name}}</title> 
    </head> 
    <body> 
        <div class="container mt-3"> 
            <div class="row"> 
                <div class="col-12"> 
                    <div class="pt-3 d-flex justify-content-end align-items-center"> 
                        <h1 class="h2 mr-auto">Biodata {{$student->name}}</h1> 
                        <<a href="{{ route('student.edit',['student' => $student->id]) }}" class="btn btn-primary">Edit </a> 
                        <form action="{{ route('student.destroy',['student'=>$student->id]) }}" method="POST"> 
                            @method('DELETE') 
                            @csrf 
                            <button type="submit" class="btn btn-danger ml-3">Hapus</button> 
                        </form> 
                    </div> 
                    <hr> 
                    @if(session()->has('pesan')) 
                    <div class="alert alert-success"> 
                        {{ session()->get('pesan') }} 
                    </div> @endif 
                    <ul> 
                        <li>NIM: {{$student->nim}} </li> 
                        <li>Nama: {{$student->name}} </li> 
                        <li>Jenis Kelamin: {{$student->gender == 'P' ? 'Perempuan' : 'Laki-laki'}} </li> 
                        <li>Jurusan: {{$student->departement}} </li> 
                        <li>Alamat: {{$student->address == '' ? 'N/A' : $student->address}} </li> 
                    </ul> 
                </div> 
            </div> 
        </div> 
    </body> 
    </html>