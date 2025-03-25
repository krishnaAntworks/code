<x-navbar>
<div class='border-4 p-4 m-4 rounded-lg border-sky-300'>
            <h2 class='text-cyan-800 border-b-2 border-sky-100'>{{ $job->employer->name}}</h2>
            <h3 >{{ $job['title'] }}</h3> 
            <p>{{ $job['salary']}}</p>
        </div>
</x-navbar>