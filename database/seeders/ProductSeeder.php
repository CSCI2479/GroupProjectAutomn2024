<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             DB::table('products')->insert([

                [
                    'name' => 'RGB Gaming Headphones Stand with 2 USB Ports Headset Stand',
                    'price' => 21.99,
                    'description' => 'RGB Gaming Headphones Stand with 2 USB Ports Headset Stand with 10 Light Modes and Non-Slip Rubber, Suitable for All Earphone Accessories, Best Gift for Husband, Kids, Boyfriend',
                    'category_id' => 1,
                    'slug'=> 'RGB_Gaming_Headphones',
                    'image'=>'rgp_headphones.jpg',
                ],
                [
                    'name' => 'iBUYPOWER Y60 Black Gaming PC Computer Desktop',
                    'price' => 1899.99,
                    'description' => 'iBUYPOWER Y60 Black Gaming PC Computer Desktop Y60BA9N47TS03 (AMD Ryzen 9 7900X CPU, NVIDIA GeForce RTX 4070 Ti Super 16GB GPU, 32GB DDR5 RGB 5200MHz RAM, 2TB NVMe, WiFi Ready, Windows 11 Home)',
                    'category_id' => 1,
                    'slug'=> 'iBuyPower_Gaming_PC',
                    'image'=>'ibuypower.webp',
                ],
                [
                   'name' => 'Xbox Core Wireless Gaming Controller',
                    'price' => 51.13,
                    'description' => 'Xbox Core Wireless Gaming Controller Deep Pink Xbox Series X|S, Xbox One, Windows PC, Android, and iOS',
                    'category_id' => 1,
                    'slug'=> 'Xbox_wireless_gaming_controller',
                    'image'=>'xbox.webp',
                ],
                [
                    'name' => 'Stereo Gaming Headset',
                     'price' => 22.99,
                     'description' => 'BENGOO G9000 Stereo Gaming Headset for PS4 PC Xbox One PS5 Controller, Noise Cancelling Over Ear Headphones with Mic, LED Light, Bass Surround, Soft Memory Earmuffs (Blue)',
                     'category_id' => 1,
                     'slug'=> 'Stereo_Gaming_Headset',
                     'image'=>'gamingheadset.jpg',
                ],
                 [
                    'name' => 'ASUS TUF Gaming 27" 2K HDR Gaming Monitor',
                     'price' => 265.00,
                     'description' => 'ASUS TUF Gaming 27" 2K HDR Gaming Monitor (VG27AQ) - QHD (2560 x 1440), 165Hz (Supports 144Hz), 1ms, Extreme Low Motion Blur, Speaker, G-SYNC Compatible, VESA Mountable, DisplayPort, HDMI, Black',
                     'category_id' => 1,
                     'slug'=> 'Gaming_Monitor',
                     'image'=>'gamingmonitor.jpg',
                 ],
                 [
                    'name' => 'Abstract Topographic Map White Grey Black Gaming Mouse Pad',
                     'price' => 7.50,
                     'description' => 'Abstract Topographic Map White Grey Black Gaming Mouse Pad Long Mouse Pad Large Desk Mat 31.5 X 11.8 Inch Mousepad with Non-Slip Base Stitched Edge Keyboard Mat for Gaming Office',
                     'category_id' => 1,
                     'slug'=> 'Gaming_Mouse_Pad',
                     'image'=>'gamingmousepad.jpg',
                 ],
                 [
                    'name' => 'HP Envy 6155e Wireless All-in-One Color Inkjet Printer',
                     'price' => 139.99,
                     'description' => 'HP Envy 6155e Wireless All-in-One Color Inkjet Printer, Print, scan, Copy, Duplex Printing Best-for-Home, 3 Months of Ink Included (714L5A)',
                     'category_id' => 2,
                     'slug'=> 'HP_Wireless_Color_Inkjet',
                     'image'=>'hpprinter.webp',
                 ],
                 [
                    'name' => 'Epson EcoTank ET-2800 Wireless Color All-in-One',
                     'price' => 179.99,
                     'description' => 'Epson EcoTank ET-2800 Wireless Color All-in-One Cartridge-Free Supertank Printer with Scan and Copy â€“ The Ideal Basic Home Printer - Black, Medium',
                     'category_id' => 2,
                     'slug'=> 'Epson_EcoTank_Wireless_Color',
                     'image'=>'epsonprinter.jpg',
                 ],
                 [
                    'name' => 'HP 67 Black/Tri-color Ink Cartridges (2 Pack)',
                     'price' => 36.89,
                     'description' => 'HP 67 Black/Tri-color Ink Cartridges (2 Pack) | Works with HP DeskJet 1255, 2700, 4100 Series, HP ENVY 6000, 6400 Series | Eligible for Instant Ink | 3YP29AN',
                     'category_id' => 2,
                     'slug'=> 'Hp_Black_Tri_Color_Ink_Cartridges',
                     'image'=>'hpink.jpg',
                 ],
                 [
                    'name' => 'Canon MegaTank G3270 All-in-One Wireless Inkjet Printer',
                     'price' => 149.00,
                     'description' => 'Canon MegaTank G3270 All-in-One Wireless Inkjet Printer for Home Use, Print, Scan and Copy, Black',
                     'category_id' => 2,
                     'slug'=> 'Canon_MegaTank_Wireless_Printer',
                     'image'=>'canonprinter.jpg',
                 ],
                 [
                    'name' => 'Canon PIXMA TR4720 All-in-One Wireless Printer',
                     'price' => 69.00,
                     'description' => 'Canon PIXMA TR4720 All-in-One Wireless Printer, Home Use with Auto Document Feeder, Mobile Printing and Built-in Fax, Black',
                     'category_id' => 2,
                     'slug'=> 'Canon_Pixma_Wireless_Printer',
                     'image'=>'canonpixma.jpg',
                 ],
                 [
                    'name' => 'Canon PG-243 / CL-244 Genuine Ink Value Pack (2 Cartridges)',
                     'price' => 29.00,
                     'description' => 'Canon PG-243 / CL-244 Genuine Ink Value Pack (2 Cartridges), Compatible with iP2820, MX492, MG2420/2520/2920/2922/2924/3020/2522/2525, TS3120/302/302a/202/4520/3320',
                     'category_id' => 2,
                     'slug'=> 'Canon_PG-243_Ink',
                     'image'=>'canonink.jpg',
                 ],
                 [
                    'name' => 'Wide Angle Webcam with Microphone and Speaker',
                     'price' => 199.99,
                     'description' => 'Wide Angle Webcam with Microphone and Speaker, Conference Room USB 1080P 60fps Web Camera for Smart TV Computer Video Call Streaming Meeting, Works for Microsoft Teams, Zoom, PC',
                     'category_id' => 3,
                     'slug'=> 'Wide_Angle_Webcam',
                     'image'=>'wideanglecam.jpg',
                 ],
                 [
                    'name' => '2K Cameras for Home Security-Outdoor/Indoor Camera',
                     'price' => 39.99,
                     'description' => '2K Cameras for Home Security-Outdoor/Indoor Camera for Dog/Cat/Pet/Nanny/Baby, Color Night Vision, White Light, Siren, 24/7 SD Recordings, Works with Alexa/Google Home, C1-White-2P (2.4Ghz WiFi)',
                     'category_id' => 3,
                     'slug'=> '2K_Cameras_For_Home',
                     'image'=>'AOQEEcamera.jpg',
                 ],
                 [
                    'name' => 'Outdoor Security Camera Wireless 2K Camera',
                     'price' => 39.99,
                     'description' => 'Outdoor Security Camera Wireless 2K Camera for Home Security Wireless Outdoor Battery Security Cameras 2.4GHz WiFi Smart Motion Detection,Color Night Vision,Waterproof, Cloud/SD Storage',
                     'category_id' => 3,
                     'slug'=> 'Outdoor_Security_Camera',
                     'image'=>'outdoorsecuritycamera.jpg',
                 ],
                 [
                    'name' => 'AK45 Stereo Audio Amplifier',
                     'price' => 36.99,
                     'description' => 'AK45 Stereo Audio Amplifier,300W Home 2 Channel Wireless Bluetooth 5.0 Power Amplifier System, Home Amplifiers FM Radio, USB, SD Card, with Remote Control Home Theater Audio Stereo System',
                     'category_id' => 3,
                     'slug'=> 'AK45_Stereo_Audio_Amplifier',
                     'image'=>'AK45stereoaudio.jpg',
                 ],
                 [
                    'name' => 'ULTIMEA 7.1ch Virtual Surround Sound Bar',
                     'price' => 129.99,
                     'description' => 'ULTIMEA 7.1ch Virtual Surround Sound Bar, Sound Bar for Smart TV with 4 Surround Speakers, Peak Power 330W, Surround Sound System for TV, App Control, TV Soundbar with Subwoofer, Opt/AUX/BT, Aura A40',
                     'category_id' => 3,
                     'slug'=> 'ULTIMEA_Sound_Bar',
                     'image'=>'ULTIMEAsoundbar.jpg',
                 ],
                 [
                    'name' => 'Sony STRDH190 2-ch Home Stereo Receiver',
                     'price' => 198.00,
                     'description' => 'Sony STRDH190 2-ch Home Stereo Receiver with Phono Inputs & Bluetooth Black',
                     'category_id' => 3,
                     'slug'=> 'Sony_Stereo_Receiver',
                     'image'=>'sonystereo.jpg',
                 ],
                 [
                    'name' => 'Peloton Tread | Treadmill for Running, Walking, and Hiking',
                     'price' => 2695.00,
                     'description' => 'Peloton Tread | Treadmill for Running, Walking, and Hiking with Manual or Auto-Incline Options and Immersive 24” HD Touchscreen',
                     'category_id' => 4,
                     'slug'=> 'Peloton_Treadmill',
                     'image'=>'pelotontreadmill.jpg',
                 ],
                 [
                    'name' => 'Push Up Board,Home Gym, Portable Exercise Equipment',
                     'price' => 39.99,
                     'description' => 'Push Up Board,Home Gym,Portable Exercise Equipment,Pilates Bar & 20 Fitness Accessories with Resistance Bands & Ab Roller Wheel,Full Body Workout at Home.',
                     'category_id' => 4,
                     'slug'=> 'Portable_Exercise_Equipment',
                     'image'=>'portableexercise.jpg',
                 ],
                 [
                    'name' => 'Pilates Bar Kit with Resistance Bands',
                     'price' => 27.99,
                     'description' => 'Pilates Bar Kit with Resistance Bands, Multifunctional Pilates Bar for Women & Men with Heavy-Duty Metal Adjustment Buckle, Pilates Home Equipment for Full BodyWorkouts',
                     'category_id' => 4,
                     'slug'=> 'Pilates_Bar_Kit',
                     'image'=>'pilatesbarkit.jpg',
                 ],
                 [
                    'name' => 'Basic Weight Bench for Home Gym',
                     'price' => 69.99,
                     'description' => 'Basic Weight Bench for Home Gym, Foldable Workout Bench with 8 Backrests, 660LBS Weight Capacity Adjustable Bench',
                     'category_id' => 4,
                     'slug'=> 'Weight_Bench',
                     'image'=>'weightbench.jpg',
                 ],
                 [
                    'name' => 'Adjustable Dumbbells Hand Weights Set',
                     'price' => 39.99,
                     'description' => 'Adjustable Dumbbells Hand Weights Set: Sportneer 5 lb Dumbbells Set of 2 Each 2lb 3lb 4lb 5lb Free Weights Fast Adjust Weight 4 In 1 Weights Dumbbells Set for Women Men Home Gym Exercise Training',
                     'category_id' => 4,
                     'slug'=> 'Dumbbells_Hand_Weights',
                     'image'=>'dumbbells.jpg',
                 ],
                 [
                    'name' => 'Large Exercise Mat Workout Mat',
                     'price' => 139.99,
                     'description' => 'Large Exercise Mat Workout Mat for Home Gym Mats Exercise Heavy Duty Gym Flooring Fitness Mat Large Yoga Mat Cardio Mat for Weightlifting, Jump Rope, MMA, Stretch, Plyo, HIIT, Shoe-Friendly',
                     'category_id' => 4,
                     'slug'=> 'Large_Exercise_Workout_Mat',
                     'image'=>'exercisemat.jpg',
                 ],
                 [
                    'name' => 'Sony 55 Inch BRAVIA 8 Smart Google TV OLED',
                     'price' => 1398.00,
                     'description' => 'Sony 55 Inch BRAVIA 8 Smart Google TV OLED, 4k OLED TV with Pure Black OLED Contrast, Billions of Real-World Colors, Powerful Processing, Studio Calibrated Picture, Action Without Blur, TV',
                     'category_id' => 5,
                     'slug'=> 'Sony_TV',
                     'image'=>'sonytv.jpg',
                 ],
                 [
                    'name' => 'INSIGNIA 32-inch Class F20 Series Smart HD 720p Fire TV ',
                     'price' => 79.99,
                     'description' => 'INSIGNIA 32-inch Class F20 Series Smart HD 720p Fire TV with Alexa Voice Remote (NS-32F201NA23)',
                     'category_id' => 5,
                     'slug'=> 'INSIGNIA_TV',
                     'image'=>'insigniatv.jpg',
                 ],
                 [
                    'name' => 'SAMSUNG 65-Inch Class Crystal UHD 4K DU7200 Series HDR Smart TV',
                     'price' => 429.99,
                     'description' => 'SAMSUNG 65-Inch Class Crystal UHD 4K DU7200 Series HDR Smart TV w/Object Tracking Sound Lite, PurColor, Motion Xcelerator, Mega Contrast, Q-Symphony (UN65DU7200, 2024 Model)',
                     'category_id' => 5,
                     'slug'=> 'SAMSUNG_TV',
                     'image'=>'samsungtv.jpg',
                 ],
                 [
                    'name' => 'Amazon Fire TV 55',
                     'price' => 469.99,
                     'description' => 'Amazon Fire TV 55" Omni Series (newest model), 4K UHD smart TV, hands-free with Alexa',
                     'category_id' => 5,
                     'slug'=> 'Amazon_Fire_TV',
                     'image'=>'amazontv.jpg',
                 ],
                 [
                    'name' => 'Canon EOS R6 Mark II Mirrorless Camera',
                     'price' => 2299.00,
                     'description' => 'Canon EOS R6 Mark II Mirrorless Camera RF24-105mm F4-7.1 is STM Lens Kit, Full-Frame Hybrid Camera, 24.2 Megapixel CMOS Sensor, Photo and Video Capabilities, Black',
                     'category_id' => 5,
                     'slug'=> 'Canon_Camera',
                     'image'=>'canoncamera.jpg',
                 ],
                 [
                    'name' => 'Panasonic LUMIX FZ80D 18.1MP Point & Shoot Digital Camera',
                     'price' => 485.43,
                     'description' => 'Panasonic LUMIX FZ80D 18.1MP Point & Shoot Digital Camera Bundle with 32GB UHS-I SDHC Memory Card, Corel Photo Video Art Suite Software Kit, Shoulder Bag',
                     'category_id' => 5,
                     'slug'=> 'Panosonic_Camera',
                     'image'=>'panasoniccamera.jpg',
                 ],
                 [
                    'name' => 'Apple 2024 MacBook Air 15-inch Laptop',
                     'price' => 1528.00,
                     'description' => 'Apple 2024 MacBook Air 15-inch Laptop with M3 chip: 16GB Memory, 512GB Storage; Silver with AppleCare+ (3 Years)',
                     'category_id' => 6,
                     'slug'=> 'Apple_MacBook_Air_Laptop',
                     'image'=>'applelaptop.jpg',
                 ],
                 [
                    'name' => 'HP 14 Laptop, Intel Celeron N4020',
                     'price' => 176.00,
                     'description' => 'HP 14 Laptop, Intel Celeron N4020, 4 GB RAM, 64 GB Storage, 14-inch Micro-edge HD Display, Windows 11 Home, Thin & Portable, 4K Graphics, One Year of Microsoft 365 (14-dq0040nr, Snowflake White)',
                     'category_id' => 6,
                     'slug'=> 'HP_14_Laptop',
                     'image'=>'hplaptop.jpg',
                 ],
                 [
                    'name' => 'Apple 2024 MacBook Air 13-inch Laptop',
                     'price' => 1099.00,
                     'description' => 'Apple 2024 MacBook Air 13-inch Laptop with M3 chip: Built for Apple Intelligence, 13.6-inch Liquid Retina Display, 16GB Unified Memory, 512GB SSD Storage, Backlit Keyboard, Touch ID; Starlight',
                     'category_id' => 6,
                     'slug'=> 'Apple_MacBook_Air_Laptop',
                     'image'=>'macbookairlaptop.jpg',
                 ],
                 [
                    'name' => 'Lenovo ThinkBook 16 Gen 6 Business Laptop',
                     'price' => 719.00,
                     'description' => 'Lenovo ThinkBook 16 Gen 6 Business Laptop | 16" FHD+ Display | AMD Ryzen 5 7530U | 32GB RAM | 1TB SSD | FP Reader | HDMI | Webcam | Backlit KB | Wi-Fi 6 | Windows 11 Pro | Targus Docking Station',
                     'category_id' => 6,
                     'slug'=> 'Lenovo_ThinkBook_Laptop',
                     'image'=>'lenovolaptop.jpg',
                 ],
                 [
                    'name' => 'HP Elite Desktop PC Computer Intel Core i5 3.1-GHz',
                     'price' => 123.00,
                     'description' => 'HP Elite Desktop PC Computer Intel Core i5 3.1-GHz, 8 gb Ram, 1 TB Hard Drive, DVDRW, 19 Inch LCD Monitor, Keyboard, Mouse, Wireless WiFi, Windows 10 (Renewed)',
                     'category_id' => 6,
                     'slug'=> 'HP_Elite_Desktop_PC',
                     'image'=>'hpdesktop.jpg',
                 ],
                 [
                    'name' => 'HP Elite Desktop PC Computer Intel Core i5 3.1-GHz',
                     'price' => 471.98,
                     'description' => 'Dell Inspiron 15 Business Laptop Computer Windows 11 Pro, Touchscreen 11th Gen Intel Quad-Core i5-1135G7, 16GB RAM, Numeric Keypad, Wi-Fi, Webcam, HDMI, Black',
                     'category_id' => 6,
                     'slug'=> 'Dell_Elite_Desktop_PC',
                     'image'=>'delldesktop.jpg',
                 ],
            ]);
    }
}
