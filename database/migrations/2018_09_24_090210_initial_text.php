<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('texts')->insert([
            ['key' => 'general', 'component' => 'lorem', 'language' => 'en', 'text' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit aliquam enim ac luctus. Sed eget viverra neque. Mauris in consequat enim. Vivamus sollicitudin ipsum elit, vel pharetra augue euismod sit amet. Aliquam congue, massa id eleifend varius, turpis ex hendrerit elit, ut bibendum libero nibh at nisl. Nullam urna erat, dapibus nec hendrerit ut, elementum a sem. Fusce lobortis quam et purus finibus tempus nec vel nulla. Quisque in viverra ipsum. Praesent eu massa imperdiet, suscipit lectus et, fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada aliquet maximus. Maecenas lacinia rhoncus turpis, sit amet cursus augue dictum non.

                Suspendisse tempor accumsan arcu, quis venenatis dolor commodo ac. In id feugiat tortor, vel commodo ante. Mauris vestibulum purus non metus volutpat, id pulvinar risus porta. Quisque id sem ut est lobortis vulputate. In a feugiat quam. Curabitur gravida turpis in orci imperdiet volutpat. Donec blandit facilisis felis in feugiat. Morbi egestas rutrum erat. Phasellus leo urna, ullamcorper sit amet eros non, efficitur dignissim lectus. Phasellus congue, nunc eget molestie eleifend, ligula turpis venenatis felis, commodo venenatis odio metus laoreet ante. Nulla enim tortor, accumsan nec elit et, volutpat euismod metus.

                Maecenas lorem neque, congue nec nulla vel, scelerisque ultricies dui. Vivamus eget enim ultricies nisi sagittis tincidunt at a nibh. Curabitur ac consequat nulla. Proin at luctus eros. Aenean ut mauris vel nulla eleifend accumsan nec ut tellus. Nunc ornare viverra ligula vehicula mollis. Curabitur nec dui ac mauris dignissim cursus. Maecenas blandit ipsum sit amet semper sodales. Ut eros risus, commodo sit amet laoreet eu, luctus vel tortor. Nam eu erat cursus, facilisis enim sed, tincidunt mauris. Phasellus egestas, turpis quis pretium suscipit, eros quam semper nunc, ac commodo arcu felis id felis. Mauris ut ipsum ac libero tincidunt ullamcorper.

                Cras et justo laoreet, sagittis purus sed, semper mi. Morbi sed tellus purus. Proin nec leo tellus. Vivamus condimentum accumsan purus, eu aliquam ex rhoncus non. Nunc aliquet sed odio in congue. Vestibulum ligula lacus, euismod quis mauris quis, vestibulum efficitur nunc. Morbi imperdiet semper nunc a varius. Phasellus suscipit neque vitae sapien elementum, at ultricies neque dignissim. Morbi posuere lorem non tristique auctor. Phasellus a luctus velit. Ut maximus nibh at magna facilisis porttitor.

                Praesent ullamcorper sodales tempor. Proin laoreet felis nulla, eget molestie sapien hendrerit a. Nulla erat ipsum, malesuada non justo sit amet, commodo rutrum enim. Nullam tristique, metus sit amet laoreet finibus, sapien sapien euismod eros, sed accumsan lorem turpis sit amet odio. Mauris ipsum mauris, lobortis sit amet orci eget, interdum eleifend orci. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa mi, suscipit aliquet orci a, posuere vestibulum velit. Quisque dolor purus, facilisis eu velit et, maximus placerat urna. Quisque placerat vel velit vel vulputate. Fusce elit ligula, posuere non augue eget, feugiat placerat arcu. Integer ultrices auctor lobortis. 
            ', 'created_at' => Carbon\Carbon::NOW(), 'updated_at' => \Carbon\Carbon::NOW()],

            ['key' => 'general', 'component' => 'lorem', 'language' => 'nl', 'text' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit aliquam enim ac luctus. Sed eget viverra neque. Mauris in consequat enim. Vivamus sollicitudin ipsum elit, vel pharetra augue euismod sit amet. Aliquam congue, massa id eleifend varius, turpis ex hendrerit elit, ut bibendum libero nibh at nisl. Nullam urna erat, dapibus nec hendrerit ut, elementum a sem. Fusce lobortis quam et purus finibus tempus nec vel nulla. Quisque in viverra ipsum. Praesent eu massa imperdiet, suscipit lectus et, fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada aliquet maximus. Maecenas lacinia rhoncus turpis, sit amet cursus augue dictum non.

                Suspendisse tempor accumsan arcu, quis venenatis dolor commodo ac. In id feugiat tortor, vel commodo ante. Mauris vestibulum purus non metus volutpat, id pulvinar risus porta. Quisque id sem ut est lobortis vulputate. In a feugiat quam. Curabitur gravida turpis in orci imperdiet volutpat. Donec blandit facilisis felis in feugiat. Morbi egestas rutrum erat. Phasellus leo urna, ullamcorper sit amet eros non, efficitur dignissim lectus. Phasellus congue, nunc eget molestie eleifend, ligula turpis venenatis felis, commodo venenatis odio metus laoreet ante. Nulla enim tortor, accumsan nec elit et, volutpat euismod metus.

                Maecenas lorem neque, congue nec nulla vel, scelerisque ultricies dui. Vivamus eget enim ultricies nisi sagittis tincidunt at a nibh. Curabitur ac consequat nulla. Proin at luctus eros. Aenean ut mauris vel nulla eleifend accumsan nec ut tellus. Nunc ornare viverra ligula vehicula mollis. Curabitur nec dui ac mauris dignissim cursus. Maecenas blandit ipsum sit amet semper sodales. Ut eros risus, commodo sit amet laoreet eu, luctus vel tortor. Nam eu erat cursus, facilisis enim sed, tincidunt mauris. Phasellus egestas, turpis quis pretium suscipit, eros quam semper nunc, ac commodo arcu felis id felis. Mauris ut ipsum ac libero tincidunt ullamcorper.

                Cras et justo laoreet, sagittis purus sed, semper mi. Morbi sed tellus purus. Proin nec leo tellus. Vivamus condimentum accumsan purus, eu aliquam ex rhoncus non. Nunc aliquet sed odio in congue. Vestibulum ligula lacus, euismod quis mauris quis, vestibulum efficitur nunc. Morbi imperdiet semper nunc a varius. Phasellus suscipit neque vitae sapien elementum, at ultricies neque dignissim. Morbi posuere lorem non tristique auctor. Phasellus a luctus velit. Ut maximus nibh at magna facilisis porttitor.

                Praesent ullamcorper sodales tempor. Proin laoreet felis nulla, eget molestie sapien hendrerit a. Nulla erat ipsum, malesuada non justo sit amet, commodo rutrum enim. Nullam tristique, metus sit amet laoreet finibus, sapien sapien euismod eros, sed accumsan lorem turpis sit amet odio. Mauris ipsum mauris, lobortis sit amet orci eget, interdum eleifend orci. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa mi, suscipit aliquet orci a, posuere vestibulum velit. Quisque dolor purus, facilisis eu velit et, maximus placerat urna. Quisque placerat vel velit vel vulputate. Fusce elit ligula, posuere non augue eget, feugiat placerat arcu. Integer ultrices auctor lobortis. 
            ', 'created_at' => Carbon\Carbon::NOW(), 'updated_at' => \Carbon\Carbon::NOW()]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('texts')->
            where('component', 'lorem')->
            delete();
    }
}
