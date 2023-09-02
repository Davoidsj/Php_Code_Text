<?php 


if(isset($_FILES['image']))
{
  
$file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
   
   if(move_uploaded_file($file_temp,"upload_images/".$file_name)){
    echo "Successfully uploaded image";
   }
else
echo "Failed to upload image";
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<script src="https://cdn.tailwindcss.com"></script>
    <title>Image Upload</title>
</head>
<body>



<!-- component -->
<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
	style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
	<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
	<div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
		<div class="text-center">
			<h2 class="mt-5 text-3xl font-bold text-gray-900">
				File Upload!
			</h2>
			<p class="mt-2 text-sm text-gray-400">Upload your images.</p>
		</div>
        <form action=" " class="mt-8 space-y-3" method="POST" enctype="multipart/form-data">
    
                    <div class="grid grid-cols-1 space-y-2">
                                    <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                
                                <input type="file" name="image" accept="image/*">
                            </label>
                        </div>
                    </div>
                            <p class="text-sm text-gray-300">
                                <span>File type: All types of images</span>
                            </p>
                    <div>
                        <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Upload
                    </button>
                    </div>
        </form>
	</div>
</div>





</body>


</html>