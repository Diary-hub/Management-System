@extends('layout')
@section('content')



<div class="w-full px-8 md:px-32 lg:px-24">
    <form method="post" action="{{ url('enrollments/' . $enrollments->id) }}" class="bg-white rounded-md shadow-2xl p-5">
        {!! csrf_field() !!}
        @method('PATCH')
        <h1 class="text-gray-800 font-bold text-2xl mb-1">Enrollment Editor</h1>
        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input id="id" type="hidden" name="id" placeholder="id" value="{{$enrollments->id}}" />
            <input id="enroll_no" class=" pl-2 w-full outline-none border-none" type="text" name="enroll_no" placeholder="Enroll No." value="{{$enrollments->enroll_no}}" />
        </div>
        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
            </svg>
            <input class="pl-2 w-full outline-none border-none" type="text" name="batch_id" id="batch_id" placeholder="Batch ID" value="{{$enrollments->batch_id}}" />

        </div>
        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M10 9V7a5 5 0 010 0v2a2 22 0 012 2v52 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
            </svg>
            <input class="pl-2 w-full outline-none border-none" type="text" name="student_id" id="student_id" placeholder="Student ID" value="{{$enrollments->student_id}}" />

        </div>
        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
            </svg>
            <input class="pl-2 w-full outline-none border-none" type="date" name="join_date" id="join_date" placeholder="Join Date" value="{{$enrollments->join_date}}" />

        </div>
        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
            </svg>
            <input class="pl-2 w-full outline-none border-none" type="number" name="fee" id="fee" placeholder="Fee" value="{{$enrollments->fee}}" />

        </div>

        <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Update
            Enrollment</button>


    </form>




    @stop