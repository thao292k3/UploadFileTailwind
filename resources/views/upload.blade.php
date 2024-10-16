<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Upload File</title>
</head>
<body class="font-roboto">
    <div class="flex justify-between items-center p-4 border-b">
        <div class="flex items-center space-x-2">
            <i class="fas fa-info-circle">
            </i>
            <span>
                Giới thiệu
            </span>
            <i class="fas fa-language">
            </i>
            <span>
                VI
            </span>
        </div>
        <div class="flex items-center space-x-4">
            <i class="fas fa-cloud-upload-alt">
            </i>
            <span>
                Upload
            </span>
        </div>
    </div>
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="text-center mt-8">
            <img alt="ImgBB logo" class="mx-auto mb-4" height="50"
                src="https://storage.googleapis.com/a1aa/image/d2HOaPSRz4rhERa8qsXerllHbpPkIRrwmevajqMEr9TEdQlTA.jpg"
                width="100" />
            <h1 class="text-2xl font-bold mb-2">
                THêm hoặc xóa bất từ tài nguyên nào của bạn
            </h1>
            <p class="text-gray-600 mb-4">
                Bạn có thể thêm nhiều dữ liệu nữa từ
                <a class="text-blue-500" href="#">
                    máy tính của bạn
                </a>
                hoặc
                <a class="text-blue-500" href="#">
                    thêm địa chỉ tài nguyên
                </a>
                .
            </p>
            
            <label for="image">Choose an image:</label>
            <input type="file" name="image" id="image" required>
            <div class="mb-4">
                <label class="block mb-2" for="auto-delete">
                    Tự động xóa ảnh
                </label>
                <select class="border p-2" id="auto-delete">
                    <option>
                        Sau 1 ngày
                    </option>
                </select>
            </div>
            <button class="bg-green-500 text-white px-6 py-2 rounded" type="submit">
                TẢI LÊN NGAY
            </button>
            @if (session('image'))
                <p>Image uploaded successfully!</p>
                <img src="{{ Storage::url(session('image')) }}" alt="Uploaded Image">
            @endif

        </div>
    </form>
   
    <div class="bg-gray-800 text-white text-center py-8 mt-8">
        <h2 class="text-2xl font-bold">
            ImgBB Pro account
        </h2>
        <p>
            ImgBB is a free image hosting service. Upgrade to unlock all the features.
        </p>
    </div>
</body>
</html>
