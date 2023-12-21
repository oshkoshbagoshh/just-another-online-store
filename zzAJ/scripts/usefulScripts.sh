# @Author: AJ Javadi
# @Email: amirjavadi25@gmail.com
# @Date: yyyy-12-dd 22:22:22
# @Last Modified by:   undefined
# @Last Modified time: yyyy-12-dd 22:22:22
# @Description: file:///Users/aj/sandbox/just-another-online-store/zzAJ/scripts/usefulScripts.sh


#  create a directory with any subdirectories in it
# TODO: update it so that it asks the user for input
 mkdir -p app/Http/Controllers/Admin && touch app/Http/Controllers/Admin/AdminHomeController.php


# curl to download the file
curl -o undraw_profile.svg https://raw.githubusercontent.com/PracticalBooks/Practical-Laravel/main/Chapter15/onlineStore/public/img/undraw_profile.svg

# TODO: make a directory by asking the user for input
echo "Please enter the directory path you want to create:"
read dir_path
mkdir -p "$dir_path"
echo "Directory $dir_path has been created."


# php artisan serve
php artisan serve

# TODO: zip the current file and folder structure and make a backup

#  CURL
 curl https://images.unsplash.com/photo-1512099053734-e6767b535838\?w\=700\&auto\=format\&fit\=crop\&q\=60\&ixlib\=rb-4.0.3\&ixid\=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Z2xhc3Nlc3xlbnwwfHwwfHx8MA%3D%3D --output image.jpeg
