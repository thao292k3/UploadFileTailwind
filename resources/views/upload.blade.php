<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
</head>

<body class="font-roboto">
    <div class="flex justify-between items-center p-4 border-b">
        <div class="flex items-center space-x-2">
            <i class="fas fa-info-circle"></i>
            <span>Giới thiệu</span>
            <i class="fas fa-language"></i>
            <span>VI</span>
        </div>
        <div class="flex items-center space-x-4">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Upload</span>
        </div>
    </div>

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="text-center mt-8">
            <img alt="ImgBB logo" class="mx-auto mb-4" height="50"
                src="https://storage.googleapis.com/a1aa/image/d2HOaPSRz4rhERa8qsXerllHbpPkIRrwmevajqMEr9TEdQlTA.jpg"
                width="100" />
            <h1 class="text-2xl font-bold mb-2">THêm hoặc xóa bất từ tài nguyên nào của bạn</h1>
            <p class="text-gray-600 mb-4">
                Bạn có thể thêm nhiều dữ liệu nữa từ
                <a class="text-blue-500" href="#">máy tính của bạn</a>
                hoặc
                <a class="text-blue-500" href="#">thêm địa chỉ tài nguyên</a>.
            </p>

            <!-- Input chọn tệp -->
            <label for="image">Choose an image:</label>
            <input type="file" name="image" id="image" accept="image/*" required onchange="previewImage(event)">
            
            <!-- Hiển thị ảnh xem trước -->
            <div class="mt-4">
                <img id="preview" class="mx-auto hidden" width="200" alt="Image Preview">
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="auto-delete">Tự động xóa ảnh</label>
                <select class="border p-2" id="auto-delete">
                    <option>Sau 1 ngày</option>
                </select>
            </div>

            <button class="bg-green-500 text-white px-6 py-2 rounded" type="submit">TẢI LÊN NGAY</button>

            @if (session('image'))
                <p>Image uploaded successfully!</p>
                <img src="{{ Storage::url(session('image')) }}" alt="Uploaded Image">
            @endif
        </div>
    </form>

    <div class="bg-gray-800 text-white text-center py-8 mt-8">
        <h2 class="text-2xl font-bold">ImgBB Pro account</h2>
        <p>ImgBB is a free image hosting service. Upgrade to unlock all the features.</p>
    </div>

    <!-- JavaScript để hiển thị xem trước hình ảnh -->
    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        }
    </script>   
</body>

</html>
