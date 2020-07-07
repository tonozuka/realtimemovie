<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate();
        DB::table('stocks')->insert([
            'name' => 'ストーリー・オブ・マイライフ/わたしの若草物語',
            'detail' => '19世紀、アメリカ、マサチューセッツ州ボストン。マーチ家の四姉妹メグ、ジョー、ベス、エイミー。ジョーは小説家としての成功を夢見ている。ある日ジョーは、資産家のローレンス家の一人息子であるローリー（ティモシー・シャラメ）にダンス・パーティで出会う。ーリーからプロポーズされるも、結婚をして家に入ることで小説家になる夢が消えてしまうと信じるジョーは、自分の選択でありながらも、心に一抹の寂しさを抱えながらジョーは小説家として自立するため、ニューヨークに渡る――。',
            'fee' => 1800,
            'date' => null,
            'imgpath' => 'o0830108014777089923.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'はちどり',
            'detail' => '1994年、空前の経済成長を迎えていた韓国、ソウル。14歳のウニは、両親、姉、兄と集合団地に暮らしていた。ウニは、自分に無関心な大人に囲まれ、孤独な思いを抱えていた。ある日、ウニが通う漢文塾に女性教師のヨンジがやってくる。大学を休学中のヨンジは、どこか不思議な雰囲気を漂わせていた。自分の話に耳を傾けてくれるヨンジに、ウニは心を開いていく。しかしソンス大橋が崩落した日、ウニのもとにヨンジから一通の手紙と小包が届く。',
            'fee' => 1800,
            'imgpath' => '184419_01.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '水曜日が消えた',
            'detail' => '1人の人間の内側で、曜日ごとに入れ替わって暮らしている7人の“僕”が主人公。他の“曜日”とは、直接会うことはできず、日記を通してのみ間接的に互いを知っている。そのうちの最も地味でつまらない1人、通称“火曜日”の視点を通して描かれていく世界の物語。',
            'fee' => 1800,
            'date' => null,
            'imgpath' => 'o0320045214778625237.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'MIDSOMMAR ミッドサマー',
            'detail' => '家族を不慮の事故で失ったダニー(フローレンス・ピュー)は、大学で民俗学を研究する恋人や友人と5人でスウェーデンの奥地で開かれる“90年に一度の祝祭”を訪れる。美しい花々が咲き乱れ、太陽が沈まないその村は、優しい住人が陽気に歌い踊る楽園のように思えた。しかし、次第に不穏な空気が漂い始め、ダニーの心はかき乱されていく。妄想、トラウマ、不安、恐怖......それは想像を絶する悪夢の始まりだった。',
            'fee' => 1800,
            'date' => null,
            'imgpath' => '20200224064258.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'THE DEAD DON\'T DIE',
            'detail' => 'アメリカの田舎町センターヴィル。3人だけの警察署で働くロバートソン保安官（ビル・マーレイ）とピーターソン保安官代理（アダム・ドライバー）は、いつもの他愛のない住人のトラブルの対応に追われていたが、突如、街にゾンビが出現しだし、思わぬ事態に巻き込まれていく・・・。',
            'fee' => 1800,
            'date' => null,
            'imgpath' => '99326.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ランボー  ラスト・ブラッド',
            'detail' => 'いまだベトナム戦争の悪夢にさいなまれる元グリーンベレー、ジョン・ランボー。
            孤独な戦いを経て、祖国アメリカへと戻ったランボーは、故郷アリゾナの牧場で、古い友人のマリアとその孫娘ガブリエラと共に、“家族”として穏やかな生活を送っていた。しかしガブリエラがメキシコの人身売買カルテルに拉致され、事態は急転する。愛する“娘”を救出するため、ランボーは元グリーンベレーのスキルを総動員し、想像を絶する戦闘…',
            'fee' => 1800,
            'date' => null,
            'imgpath' => 'RMB5_hp_mc_R.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ワイルド・ローズ',
            'detail' => 'カリスマ的な歌声を持つシングルマザーのローズは、故郷のスコットランドからアメリカに渡り、歌手としての成功を夢みていた。だが、不器用にしか生きられない彼女は、夢を追い求めるあまり、時に愛する母親や幼い二人の子供たちを傷つけてしまう。夢か家族か、若さと才能を兼ね備え、遂に掴んだチャンスを前に、葛藤する彼女がたどり着いた答えとは?描き下ろした初のオリジナルソング。ラスト5分、魂のステージが今幕を開ける──!',
            'fee' => 1800,
            'date' => null,
            'imgpath' => '293324_01.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'エジソンズ・ゲーム',
            'detail' => '19世紀、アメリカは電気の誕生による新時代を迎えようとしていた。ェスティング ハウスは“交流”式送電の実演会を成功させ、話題をさらう。そのニュースにエジソンは激怒、“交流”は危険で人を殺すと、ネガティブキャンペーンで世論を誘 導していく。こうして世紀の“電流戦争”が幕を開けた！訴訟や駆け引き、裏工作が横行する中、ウェスティングハウスはエジソンと決裂したテスラに近づく── 果たしてこのビジネスバトルを制するのはどちらか──？',
            'fee' => 1800,
            'date' => null,
            'imgpath' => '459881.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ソニック・ザ・ムービー',
            'detail' => '宇宙の果てにある平和な"島"でのびのびと育ったソニック。砂浜や大きな滝、ループコースターも、音速のスピードで走る彼は一瞬にして駆け抜けてしまう。ある日、彼の強大なスーパーパワーを狙われ、ソニックはたった一人地球に逃げてきた。それから10年、ソニックは誰にも見つからず安全に、でもさみしくひとりぼっちで生活していたが、偶然にもその存在を探り当てられてしまった悪の天才科学者ドクター・ロボトニック(ジム・キャリー)の世界征服計画によって、捕らえられようとしていた。窮地に陥ったソニックは、小さな街の保安官トム(ジェームズ・マースデン)に助けを求める。果たしてソニックとトムは地球の危機を救うことはできるのか？',
            'fee' => 1800,
            'date' => null,
            'imgpath' => '614edbbd60e89ac74b837832adea306c.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'SKIN/スキン',
            'detail' => '実際に2003年に米国で発足したスキンヘッド集団「ヴィンランダーズ」の共同創設者ブライオン・ワイドナーの実話を基につくられた社会派作品。スキンヘッドに差別主義者を象徴する無数のタトゥー。白人至上主義者に育てられ、憎悪と暴力に満ちた生活を送っていたブライオンは、シングルマザーのジュリーと出会い、これまでの自分の悪行を悔い、新たな人生を始めようと決意する。しかし脱会を許さないかつての同志たちから執拗な脅迫、暴力を受けることとなり、ジュリーたちにもその矛先が向き始めてしまう。憎悪の円環から脱け出そうとする元レイシストの男を主人公に、レイシズムの非道、人間の再生の軌跡、そして彼を支えようとする社会の寛容を鮮烈に映し出していく。',
            'fee' => 1800,
            'date' => null,
            'imgpath' => '184487_02.jpg',
        ]);
    }
}
