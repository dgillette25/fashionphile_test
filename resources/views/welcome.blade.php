@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered table-center">
            <thead>
                <tr>
                    <th>Job</th>
                    <th>Applicant Name</th>
                    <th>Email Address</th>
                    <th>Website</th>
                    <th>Skills</th>
                    <th>Cover Letter Paragraph</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <?php $applicant_count = 1; ?>
                    @foreach($job->applicants as $applicant)
                        <?php $skill_count = 1; ?>
                        @foreach($applicant->skills as $skill)
                            <tr>
                                @if($applicant_count == 1)
                                <td rowspan="{{$job->getSkillCount()}}">{{$job->name}}</td>
                                <?php $applicant_count++; ?>
                                @endif 

                                @if($skill_count == 1)
                                <td rowspan="{{$applicant->skills->count()}}">{{$applicant->name}}</td>
                                <td rowspan="{{$applicant->skills->count()}}"><a href="mailto:{{$applicant->email}}" target="_top">{{$applicant->email}}</a></td>
                                <td rowspan="{{$applicant->skills->count()}}"><a href="{{$applicant->website}}">{{$applicant->website}}</a></td>
                                @endif

                                <td>{{$skill->name}}</td>

                                @if($skill_count == 1)
                                <td class="cover-letter" rowspan="{{$applicant->skills->count()}}">{{$applicant->cover_letter}}</td>
                                @endif

                            </tr>
                            <?php $skill_count++; ?>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
