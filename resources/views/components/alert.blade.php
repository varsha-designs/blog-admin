    @if ($errors->any())
        <div id="alert" class="mb-4 bg-red-100 text-red-700 p-4 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
    <div id="alert" class="bg-green-100 text-green-700 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    <script>
    setTimeout(() => document.getElementById('alert')?.remove(), 3000);
</script>
@endif
