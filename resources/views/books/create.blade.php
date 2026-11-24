<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2>Inserisci il tuo libro preferito:</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('books.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name ='title' class="form-control" id="title"
                            aria-describedby="titleHelp" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore:</label>
                        <input type="text" name='author' class="form-control" id="author"
                            aria-describedby="authorHelp" value="{{old('author')}}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di pubblicazione:</label>
                        <input type="text" name="year" class="form-control" id="year"
                            aria-describedby="yearHelp" value="{{old('year')}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci una copertina:</label>
                        <input type="file" name="img" class="form-control" id="img"
                            aria-describedby="imgHelp">
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">Trama</label>
                        <textarea name="plot" id="plot" cols="30" rows="10" class="form-control">{{old('plot')}}</textarea>
                    </div>
                    <button type="submit" class="btn-solid theme-primary">Inserisci il tuo libro</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
