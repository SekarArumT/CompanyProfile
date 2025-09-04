@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Edit Career</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.careers.update', $career) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="position" class="block font-semibold mb-1">Posisi/Jabatan</label>
                <input type="text" name="position" id="position" 
                       class="w-full border rounded px-3 py-2" 
                       value="{{ old('position', $career->position) }}" required>
            </div>

            <div class="mb-4">
                <label for="department" class="block font-semibold mb-1">Departemen/Divisi</label>
                <input type="text" name="department" id="department" 
                       class="w-full border rounded px-3 py-2" 
                       value="{{ old('department', $career->department) }}" required>
            </div>

            <div class="mb-4">
                <label for="location" class="block font-semibold mb-1">Lokasi Kerja</label>
                <input type="text" name="location" id="location" 
                       class="w-full border rounded px-3 py-2" 
                       value="{{ old('location', $career->location) }}" required>
            </div>

            <div class="mb-4">
                <label for="job_type" class="block font-semibold mb-1">Jenis Pekerjaan</label>
                <select name="job_type" id="job_type" class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Pilih Jenis Pekerjaan --</option>
                    <option value="full-time" {{ old('job_type', $career->job_type)=='full-time'?'selected':'' }}>Full-Time</option>
                    <option value="part-time" {{ old('job_type', $career->job_type)=='part-time'?'selected':'' }}>Part-Time</option>
                    <option value="internship" {{ old('job_type', $career->job_type)=='internship'?'selected':'' }}>Internship</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="salary_range" class="block font-semibold mb-1">Range Gaji</label>
                <input type="text" name="salary_range" id="salary_range" 
                       class="w-full border rounded px-3 py-2" 
                       value="{{ old('salary_range', $career->salary_range) }}">
            </div>

            <div class="mb-4">
                <label for="status" class="block font-semibold mb-1">Status</label>
                <select name="status" id="status" class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="open" {{ old('status', $career->status)=='open'?'selected':'' }}>Open</option>
                    <option value="closed" {{ old('status', $career->status)=='closed'?'selected':'' }}>Closed</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="link" class="block font-semibold mb-1">Link Apply</label>
                <input type="url" name="link" id="link" 
                       class="w-full border rounded px-3 py-2" 
                       value="{{ old('link', $career->link) }}">
            </div>

            <button type="submit" 
                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 shadow">
                Update Career
            </button>
        </form>
    </div>
</div>
@endsection
