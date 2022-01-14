<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <title>Edit Mahasiswa</title> 
    </head> 
    <body> 
        <div class="container pt-4 bg-white"> 
            <div class="row"> 
                <div class="col-md-8 col-xl-6"> 
                    <h1>Edit Mahasiswa</h1> 
                    <hr> 
                    <form action="{{ route('student.update',['student' => $student->id]) }}" method="POST"> 
                        @method('PATCH') 
                        @csrf 
                        <div class="form-group"> 
                            <label for="nim">NIM</label> 
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" 
                            id="nim" name="nim" value="{{ old('nim') ?? $student->nim }}"> @error('nim') 
                            <div class="text-danger">{{ $message }}</div> 
                            @enderror 
                        </div>
                        <div class="form-group"> 
                            <label for="nama">Nama Lengkap</label> 
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                            id="nama" name="nama" value="{{ old('name') ?? $student->name }}"> 
                            @error('name') 
                            <div class="text-danger">
                                {{ $message }}
                            </div> 
                            @enderror 
                        </div> 
                        <div class="form-group"> 
                            <label>Jenis Kelamin</label> 
                            <div> 
                                <div class="form-check form-check-inline"> 
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" 
                                    id="laki_laki" value="L" 
                                    {{ (old('gender') ?? $student->gender) 
                                    == 'L' ? 'checked': '' }} >
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label> 
                                </div>
                                <div class="form-check form-check-inline"> 
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" 
                                    id="perempuan" value="P" {{ (old('gender') ?? $student->gender) 
                                    == 'P' ? 'checked': '' }} > 
                                    <label class="form-check-label" for="perempuan">Perempuan</label> 
                                </div> 
                                @error('gender') 
                                    <div class="text-danger">{{ $message }}</div> 
                                @enderror 
                            </div> 
                        </div> 
                        <div class="form-group"> 
                            <label for="jurusan">Jurusan</label> 
                            <select class="form-control" name="jurusan" 
                            id="jurusan"> <option value="Teknik Informatika" 
                            {{ (old('departement') ?? $student->departement)== 
                                'Teknik Informatika' ? 'selected': '' }} > Teknik Informatika 
                            </option> 
                            <option value="Sistem Informasi" 
                            {{ (old('departement') ?? $student->departement)== 
                                'Sistem Informasi' ? 'selected': '' }} > Sistem Informasi 
                            </option> <option value="Ilmu Komputer" 
                            {{ (old('departement') ?? $student->departement)== 
                                'Ilmu Komputer' ? 'selected': '' }} > Ilmu Komputer 
                            </option> <option value="Teknik Komputer" 
                            {{ (old('departement') ?? $student->departement)== 
                                'Teknik Komputer' ? 'selected': '' }} > Teknik Komputer 
                            </option> <option value="Teknik Telekomunikasi" 
                            {{(old('departement')??$student->departement)== 
                                'Teknik Telekomunikasi'?'selected':''}} > Teknik Telekomunikasi </option> 
                            </select> @error('departement') 
                            <div class="text-danger">{{ $message }}</div> 
                            @enderror 
                        </div> 
                        <div class="form-group"> 
                            <label for="alamat">Alamat</label> 
                            <textarea class="form-control" 
                            id="alamat" rows="3" name="alamat">
                            {{ old('alamat') ?? $student->address}}
                            </textarea> 
                        </div> 
                        <button type="submit" class="btn btn-primary mb-2">Update</button> 
                    </form> 
                </div> 
            </div> 
        </div> 
    </body> 
    </html>