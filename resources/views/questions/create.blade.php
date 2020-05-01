@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="{{ route('questions.store', ['questionnaire' => $questionnaire->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" id="question" aria-describedby="questionHelp" placeholder="Enter Question" value="{{ old('question.question') }}">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions for best results.</small>
                            @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choisesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>

                                <div>
                                    <div class="form-group"> 
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="choiceHelp" placeholder="Enter Choice 1" value="{{ old('answers.0.answer') }}">
                                        @error('answers.0.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group"> 
                                        <label for="answer2">Choise 2</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer2" aria-describedby="choiceHelp" placeholder="Enter Choice 2" value="{{ old('answers.1.answer') }}">
                                        @error('answers.1.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group"> 
                                        <label for="answer3">Choise 3</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer3" aria-describedby="choiceHelp" placeholder="Enter Choice 3" value="{{ old('answers.2.answer') }}">
                                        @error('answers.2.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group"> 
                                        <label for="answer4">Choise 4</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer4" aria-describedby="choiceHelp" placeholder="Enter Choice 4" value="{{ old('answers.3.answer') }}">
                                        @error('answers.3.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
