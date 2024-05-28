@extends('dashboard')
@section('content')
<div class="flex flex-col px-8 pt-6 pb-8 my-2 mt-12 mb-4 bg-white rounded-lg shadow-lg">
  <div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Resident Details</h1>
  </div>

  <div class="grid grid-cols-4 grid-col">
    <div class="mb-4 mr-2">
        <label class="block mb-1 text-sm font-semibold text-gray-600">
            First Name
        </label>
        <div class="px-3 py-2 text-lg text-gray-800 bg-gray-100 rounded">
            {{$incidentReports->barangayId->firstName}}
        </div>
    </div>

  <div class="mb-4 mr-2">
    <label class="block mb-1 text-sm font-semibold text-gray-600">
      Last Name
    </label>
    <div class="px-3 py-2 text-lg text-gray-800 bg-gray-100 rounded">
         {{$incidentReports->barangayId->lastName}}
    </div>
  </div>

  <div class="mb-4 mr-2">
    <label class="block mb-1 text-sm font-semibold text-gray-600">
      Age
    </label>
    <div class="px-3 py-2 text-lg text-gray-800 bg-gray-100 rounded">
         {{$incidentReports->barangayId->age}}
    </div>
  </div>

  <div class="mb-6 mr-2">
    <label class="block mb-1 text-sm font-semibold text-gray-600">
      Contact Number
    </label>
    <div class="px-3 py-2 text-lg text-gray-800 bg-gray-100 rounded">
         {{$incidentReports->barangayId->contactNumber}}
    </div>
  </div>
  </div>

  <div class="grid grid-cols-2 grid-col">
    <div class="mb-4 mr-2">
    <label class="block mb-1 text-sm font-semibold text-gray-600">
      Address
    </label>
    <div class="px-3 py-2 text-lg text-gray-800 bg-gray-100 rounded">
        {{$incidentReports->barangayId->firstName}}
    </div>
  </div>
  <div class="mb-4 mr-2">
    <label class="block mb-1 text-sm font-semibold text-gray-600">
      First Name
    </label>
    <div class="px-3 py-2 text-lg text-gray-800 bg-gray-100 rounded">
        {{$incidentReports->barangayId->firstName}}
    </div>
  </div>
  </div>

  <div class="py-5 mb-6">
    <div class="mb-4 mr-2">
        <label class="block mb-1 text-lg font-semibold text-gray-600">
            Incident Subject
        </label>
        <div class="px-3 py-2 bg-gray-100 rounded text-gmray-800 text-s">
            {{$incidentReports->subject}}
        </div>
    </div>

    <div class="mb-4 mr-2">
        <label class="block mb-1 text-lg font-semibold text-gray-600">
            Message
        </label>
        <div class="px-3 py-2 text-sm text-gray-800 bg-gray-100 rounded h-44">
            {{$incidentReports->message}}
        </div>
    </div>

  </div>
</div>



@endsection