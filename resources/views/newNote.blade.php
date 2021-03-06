
@extends('layouts.background')

@section('header')
    <title>Notes</title>
    <header id="more">
        <div class="container text-center">
            <h1>Add new note</h1>
        </div>
    </header>
@endsection

@section('content')

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Add new note: </h2>

                    <!-- "add note" form -->
                    <form method="POST" action="{{route('store_note')}}">
                        {{csrf_field()}}
                        <fieldset class="form-group">

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">The title of the note: </label>
                                    <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror"  required autofocus>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="content"> The content of the note: </label>
                                    <textarea  id="text" name="text" cols="10" rows="5" required class="form-control @error('text') is-invalid @enderror" > </textarea>
                                    @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                        <button type="submit" class="btn btn-outline-primary">
                            Add note
                        </button>
                        <button type="reset" class="btn btn-outline-danger" value="Odrzuc"> Cancel </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
