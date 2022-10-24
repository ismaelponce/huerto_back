<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                'title' => 'Las frutas de la temporada',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget aliquet risus, sit amet bibendum odio. Nam maximus magna sit amet vehicula pharetra. Phasellus tincidunt mollis nulla vitae malesuada. Suspendisse sit amet lacinia libero. Pellentesque vehicula quis est vitae aliquam. Ut non lorem non neque gravida convallis quis vitae lacus. Etiam consectetur nibh erat, non ultricies enim dapibus non. Donec fermentum odio feugiat eleifend fringilla. Ut convallis risus arcu, sit amet egestas lectus eleifend tempus. Fusce ipsum metus, rutrum vitae nisi ut, euismod efficitur dolor.
                
                Ut sit amet odio sit amet velit bibendum malesuada sit amet ut turpis. Nam tristique lorem lorem, nec iaculis purus gravida at. Integer sed ante vulputate, luctus odio eu, dapibus nisl. Aenean sit amet tortor nibh. Vivamus scelerisque lectus dapibus odio suscipit, sit amet lobortis lacus scelerisque. Nulla quis egestas felis. Nulla lacinia justo quis pellentesque convallis. Nam consectetur a enim non dignissim. Mauris sagittis ac enim maximus vehicula. Aliquam ac odio elementum, pulvinar enim ac, congue sapien. Donec vel neque non felis sagittis fermentum id id turpis. Quisque eu neque velit. Cras sed erat quis justo mattis congue sed scelerisque nulla. Integer scelerisque risus eros, nec consequat dolor consequat in. In aliquam ullamcorper rhoncus.
                
                Cras condimentum augue risus, convallis feugiat purus tempor fringilla. In risus sem, tincidunt in eleifend et, hendrerit quis nunc. Phasellus facilisis, dui consequat fringilla mollis, ante metus bibendum dui, quis consequat augue sem ultricies mi. Proin consectetur, leo eu dignissim tincidunt, nibh erat molestie lectus, ut consequat orci est ac erat. Cras commodo orci lacus, sit amet ultricies dui lacinia a. Vestibulum commodo quam in justo volutpat luctus. Ut eleifend libero elit, sit amet porta eros ultricies eu. Proin eu metus risus. Nulla malesuada, neque vel cursus finibus, ante nulla imperdiet neque, maximus pulvinar urna dolor eget ex. Nullam sed volutpat urna. Praesent ac massa luctus magna euismod ultricies. Nullam bibendum tellus in tempus lobortis. In id lorem a arcu tempor malesuada ac gravida dolor.
                
                Mauris id lorem a tellus hendrerit hendrerit at nec ipsum. Nullam porta libero nec risus cursus facilisis. Integer dapibus dui nunc, sit amet vulputate eros suscipit vel. Phasellus faucibus, nibh in pulvinar malesuada, sem eros vehicula neque, at lobortis urna nulla ac elit. Suspendisse auctor sapien eget lorem lobortis finibus. Maecenas ullamcorper sapien quis augue varius, vitae faucibus tortor sodales. In ut nulla auctor, dictum neque id, placerat metus. Suspendisse varius at quam et aliquet. Fusce hendrerit consectetur velit porta porttitor. Sed ut mauris in tortor tempus sollicitudin.
                
                Phasellus rutrum magna velit, ac laoreet purus finibus in. Suspendisse gravida nec arcu a pellentesque. Quisque tincidunt enim at tempor consequat. Etiam nisi nisi, pulvinar nec congue quis, interdum sed nunc. Etiam libero elit, facilisis vel erat non, iaculis eleifend arcu. Sed rutrum ipsum finibus sem accumsan, ac tempor libero eleifend. Nulla dui mi, pharetra vulputate nibh eget, blandit iaculis lorem. Proin maximus euismod vulputate. Aliquam lacus lectus, tincidunt eu eros vitae, efficitur laoreet odio. Praesent felis velit, sollicitudin at ipsum vel, finibus consectetur leo. Integer consequat sit amet tortor id pretium. Sed at lorem et felis consequat lobortis.',
                'visualizations' => 3,
                'photo' => 'assets/imgBlog/patataBlog.png',
                'created_at' => '2021/12/18'
            ]
        );


        DB::table('articles')->insert(
            [
                'title' => 'Como regar una planta de interior',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget aliquet risus, sit amet bibendum odio. Nam maximus magna sit amet vehicula pharetra. Phasellus tincidunt mollis nulla vitae malesuada. Suspendisse sit amet lacinia libero. Pellentesque vehicula quis est vitae aliquam. Ut non lorem non neque gravida convallis quis vitae lacus. Etiam consectetur nibh erat, non ultricies enim dapibus non. Donec fermentum odio feugiat eleifend fringilla. Ut convallis risus arcu, sit amet egestas lectus eleifend tempus. Fusce ipsum metus, rutrum vitae nisi ut, euismod efficitur dolor.

                Ut sit amet odio sit amet velit bibendum malesuada sit amet ut turpis. Nam tristique lorem lorem, nec iaculis purus gravida at. Integer sed ante vulputate, luctus odio eu, dapibus nisl. Aenean sit amet tortor nibh. Vivamus scelerisque lectus dapibus odio suscipit, sit amet lobortis lacus scelerisque. Nulla quis egestas felis. Nulla lacinia justo quis pellentesque convallis. Nam consectetur a enim non dignissim. Mauris sagittis ac enim maximus vehicula. Aliquam ac odio elementum, pulvinar enim ac, congue sapien. Donec vel neque non felis sagittis fermentum id id turpis. Quisque eu neque velit. Cras sed erat quis justo mattis congue sed scelerisque nulla. Integer scelerisque risus eros, nec consequat dolor consequat in. In aliquam ullamcorper rhoncus.
                
                Cras condimentum augue risus, convallis feugiat purus tempor fringilla. In risus sem, tincidunt in eleifend et, hendrerit quis nunc. Phasellus facilisis, dui consequat fringilla mollis, ante metus bibendum dui, quis consequat augue sem ultricies mi. Proin consectetur, leo eu dignissim tincidunt, nibh erat molestie lectus, ut consequat orci est ac erat. Cras commodo orci lacus, sit amet ultricies dui lacinia a. Vestibulum commodo quam in justo volutpat luctus. Ut eleifend libero elit, sit amet porta eros ultricies eu. Proin eu metus risus. Nulla malesuada, neque vel cursus finibus, ante nulla imperdiet neque, maximus pulvinar urna dolor eget ex. Nullam sed volutpat urna. Praesent ac massa luctus magna euismod ultricies. Nullam bibendum tellus in tempus lobortis. In id lorem a arcu tempor malesuada ac gravida dolor.
                
                Mauris id lorem a tellus hendrerit hendrerit at nec ipsum. Nullam porta libero nec risus cursus facilisis. Integer dapibus dui nunc, sit amet vulputate eros suscipit vel. Phasellus faucibus, nibh in pulvinar malesuada, sem eros vehicula neque, at lobortis urna nulla ac elit. Suspendisse auctor sapien eget lorem lobortis finibus. Maecenas ullamcorper sapien quis augue varius, vitae faucibus tortor sodales. In ut nulla auctor, dictum neque id, placerat metus. Suspendisse varius at quam et aliquet. Fusce hendrerit consectetur velit porta porttitor. Sed ut mauris in tortor tempus sollicitudin.
                
                Phasellus rutrum magna velit, ac laoreet purus finibus in. Suspendisse gravida nec arcu a pellentesque. Quisque tincidunt enim at tempor consequat. Etiam nisi nisi, pulvinar nec congue quis, interdum sed nunc. Etiam libero elit, facilisis vel erat non, iaculis eleifend arcu. Sed rutrum ipsum finibus sem accumsan, ac tempor libero eleifend. Nulla dui mi, pharetra vulputate nibh eget, blandit iaculis lorem. Proin maximus euismod vulputate. Aliquam lacus lectus, tincidunt eu eros vitae, efficitur laoreet odio. Praesent felis velit, sollicitudin at ipsum vel, finibus consectetur leo. Integer consequat sit amet tortor id pretium. Sed at lorem et felis consequat lobortis.',
                'visualizations' => 11,
                'photo' => 'assets/imgBlog/gansosBlog.png',
                'created_at' => '2021/12/16'
            ]
        );
        DB::table('articles')->insert(
            [
                'title' => 'Las frutas que mas refrescan en verano',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget aliquet risus, sit amet bibendum odio. Nam maximus magna sit amet vehicula pharetra. Phasellus tincidunt mollis nulla vitae malesuada. Suspendisse sit amet lacinia libero. Pellentesque vehicula quis est vitae aliquam. Ut non lorem non neque gravida convallis quis vitae lacus. Etiam consectetur nibh erat, non ultricies enim dapibus non. Donec fermentum odio feugiat eleifend fringilla. Ut convallis risus arcu, sit amet egestas lectus eleifend tempus. Fusce ipsum metus, rutrum vitae nisi ut, euismod efficitur dolor.
                
                Ut sit amet odio sit amet velit bibendum malesuada sit amet ut turpis. Nam tristique lorem lorem, nec iaculis purus gravida at. Integer sed ante vulputate, luctus odio eu, dapibus nisl. Aenean sit amet tortor nibh. Vivamus scelerisque lectus dapibus odio suscipit, sit amet lobortis lacus scelerisque. Nulla quis egestas felis. Nulla lacinia justo quis pellentesque convallis. Nam consectetur a enim non dignissim. Mauris sagittis ac enim maximus vehicula. Aliquam ac odio elementum, pulvinar enim ac, congue sapien. Donec vel neque non felis sagittis fermentum id id turpis. Quisque eu neque velit. Cras sed erat quis justo mattis congue sed scelerisque nulla. Integer scelerisque risus eros, nec consequat dolor consequat in. In aliquam ullamcorper rhoncus.
                
                Cras condimentum augue risus, convallis feugiat purus tempor fringilla. In risus sem, tincidunt in eleifend et, hendrerit quis nunc. Phasellus facilisis, dui consequat fringilla mollis, ante metus bibendum dui, quis consequat augue sem ultricies mi. Proin consectetur, leo eu dignissim tincidunt, nibh erat molestie lectus, ut consequat orci est ac erat. Cras commodo orci lacus, sit amet ultricies dui lacinia a. Vestibulum commodo quam in justo volutpat luctus. Ut eleifend libero elit, sit amet porta eros ultricies eu. Proin eu metus risus. Nulla malesuada, neque vel cursus finibus, ante nulla imperdiet neque, maximus pulvinar urna dolor eget ex. Nullam sed volutpat urna. Praesent ac massa luctus magna euismod ultricies. Nullam bibendum tellus in tempus lobortis. In id lorem a arcu tempor malesuada ac gravida dolor.
                
                Mauris id lorem a tellus hendrerit hendrerit at nec ipsum. Nullam porta libero nec risus cursus facilisis. Integer dapibus dui nunc, sit amet vulputate eros suscipit vel. Phasellus faucibus, nibh in pulvinar malesuada, sem eros vehicula neque, at lobortis urna nulla ac elit. Suspendisse auctor sapien eget lorem lobortis finibus. Maecenas ullamcorper sapien quis augue varius, vitae faucibus tortor sodales. In ut nulla auctor, dictum neque id, placerat metus. Suspendisse varius at quam et aliquet. Fusce hendrerit consectetur velit porta porttitor. Sed ut mauris in tortor tempus sollicitudin.
                
                Phasellus rutrum magna velit, ac laoreet purus finibus in. Suspendisse gravida nec arcu a pellentesque. Quisque tincidunt enim at tempor consequat. Etiam nisi nisi, pulvinar nec congue quis, interdum sed nunc. Etiam libero elit, facilisis vel erat non, iaculis eleifend arcu. Sed rutrum ipsum finibus sem accumsan, ac tempor libero eleifend. Nulla dui mi, pharetra vulputate nibh eget, blandit iaculis lorem. Proin maximus euismod vulputate. Aliquam lacus lectus, tincidunt eu eros vitae, efficitur laoreet odio. Praesent felis velit, sollicitudin at ipsum vel, finibus consectetur leo. Integer consequat sit amet tortor id pretium. Sed at lorem et felis consequat lobortis.',
                'visualizations' => 2,
                'photo' => 'assets/imgBlog/polloBlog.png',
                'created_at' => '2021/12/14'
            ]
        );
        
        DB::table('articles')->insert(
            [
                'title' => 'Receta de crema de calabaza',
                'text' => 'Calabaza, nata y pimienta',
                'visualizations' => 6,
                'created_at' => '2021/06/11',
                'photo' => 'assets/imgBlog/tomatesBlog.png'
            ]
        );
    }
}
