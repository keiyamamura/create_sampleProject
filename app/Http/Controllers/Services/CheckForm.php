<?php

namespace App\Http\Controllers\Services;

class CheckForm
{
    public static function gender($data)
    {
        $gender = '';

        if ($data->gender == 0) {
            $gender = '男性';
        }
        if ($data->gender == 1) {
            $gender = '女性';
        }

        return $gender;
    }

    public static function age($data)
    {
        $age = '';

        if ($data->age == 19) {
        $age = '19歳';
        }
        if ($data->age == 20) {
        $age = '20歳';
        }
        if ($data->age == 21) {
        $age = '21歳';
        }
        if ($data->age == 22) {
        $age = '22歳';
        }
        if ($data->age == 23) {
        $age = '23歳';
        }
        if ($data->age == 24) {
        $age = '24歳';
        }
        if ($data->age == 25) {
        $age = '25歳';
        }
        if ($data->age == 26) {
        $age = '26歳';
        }
        if ($data->age == 27) {
        $age = '27歳';
        }
        if ($data->age == 28) {
        $age = '28歳';
        }
        if ($data->age == 29) {
        $age = '29歳';
        }
        if ($data->age == 30) {
        $age = '30歳';
        }
        if ($data->age == 31) {
        $age = '31歳';
        }
        if ($data->age == 32) {
        $age = '32歳';
        }
        if ($data->age == 33) {
        $age = '33歳';
        }
        if ($data->age == 34) {
        $age = '34歳';
        }
        if ($data->age == 35) {
        $age = '35歳';
        }
        if ($data->age == 36) {
        $age = '36歳';
        }
        if ($data->age == 37) {
        $age = '37歳';
        }
        if ($data->age == 38) {
        $age = '38歳';
        }
        if ($data->age == 39) {
        $age = '39歳';
        }
        if ($data->age == 40) {
        $age = '40歳';
        }
        if ($data->age == 41) {
        $age = '41歳';
        }
        if ($data->age == 42) {
        $age = '42歳';
        }
        if ($data->age == 43) {
        $age = '43歳';
        }
        if ($data->age == 44) {
        $age = '44歳';
        }
        if ($data->age == 45) {
        $age = '45歳';
        }
        if ($data->age == 46) {
        $age = '46歳';
        }
        if ($data->age == 47) {
        $age = '47歳';
        }
        if ($data->age == 48) {
        $age = '48歳';
        }
        if ($data->age == 49) {
        $age = '49歳';
        }
        if ($data->age == 50) {
        $age = '50歳';
        }
        if ($data->age == 51) {
        $age = '51歳';
        }
        if ($data->age == 52) {
        $age = '52歳';
        }
        if ($data->age == 53) {
        $age = '53歳';
        }
        if ($data->age == 54) {
        $age = '54歳';
        }
        if ($data->age == 55) {
        $age = '55歳';
        }
        if ($data->age == 56) {
        $age = '56歳';
        }
        if ($data->age == 57) {
        $age = '57歳';
        }
        if ($data->age == 58) {
        $age = '58歳';
        }
        if ($data->age == 59) {
        $age = '59歳';
        }
        if ($data->age == 60) {
        $age = '60歳';
        }
        if ($data->age == 61) {
        $age = '61歳';
        }
        if ($data->age == 62) {
        $age = '62歳';
        }
        if ($data->age == 63) {
        $age = '63歳';
        }
        if ($data->age == 64) {
        $age = '64歳';
        }
        if ($data->age == 65) {
        $age = '65歳';
        }
        if ($data->age == 66) {
        $age = '66歳';
        }
        if ($data->age == 67) {
        $age = '67歳';
        }
        if ($data->age == 68) {
        $age = '68歳';
        }
        if ($data->age == 69) {
        $age = '69歳';
        }
        if ($data->age == 70) {
        $age = '70歳';
        }

        return $age;
    }

    public static function prefecture($data)
    {
        $prefecture = '';

        if ($data->prefectures_id == 1) {
            $prefecture = '北海道';
        }
        if ($data->prefectures_id == 2) {
            $prefecture = '青森県';
        }
        if ($data->prefectures_id == 3) {
            $prefecture = '岩手県';
        }
        if ($data->prefectures_id == 4) {
            $prefecture = '宮城県';
        }
        if ($data->prefectures_id == 5) {
            $prefecture = '秋田県';
        }
        if ($data->prefectures_id == 6) {
            $prefecture = '山形県';
        }
        if ($data->prefectures_id == 7) {
            $prefecture = '福島県';
        }
        if ($data->prefectures_id == 8) {
            $prefecture = '茨城県';
        }
        if ($data->prefectures_id == 9) {
            $prefecture = '栃木県';
        }
        if ($data->prefectures_id == 10) {
            $prefecture = '群馬県';
        }
        if ($data->prefectures_id == 11) {
            $prefecture = '埼玉県';
        }
        if ($data->prefectures_id == 12) {
            $prefecture = '千葉県';
        }
        if ($data->prefectures_id == 13) {
            $prefecture = '東京都';
        }
        if ($data->prefectures_id == 14) {
            $prefecture = '神奈川';
        }
        if ($data->prefectures_id == 15) {
            $prefecture = '新潟県';
        }
        if ($data->prefectures_id == 16) {
            $prefecture = '富山県';
        }
        if ($data->prefectures_id == 17) {
            $prefecture = '石川県';
        }
        if ($data->prefectures_id == 18) {
            $prefecture = '福井県';
        }
        if ($data->prefectures_id == 19) {
            $prefecture = '山梨県';
        }
        if ($data->prefectures_id == 20) {
            $prefecture = '長野県';
        }
        if ($data->prefectures_id == 21) {
            $prefecture = '岐阜県';
        }
        if ($data->prefectures_id == 22) {
            $prefecture = '静岡県';
        }
        if ($data->prefectures_id == 23) {
            $prefecture = '愛知県';
        }
        if ($data->prefectures_id == 24) {
            $prefecture = '三重県';
        }
        if ($data->prefectures_id == 25) {
            $prefecture = '滋賀県';
        }
        if ($data->prefectures_id == 26) {
            $prefecture = '京都府';
        }
        if ($data->prefectures_id == 27) {
            $prefecture = '大阪府';
        }
        if ($data->prefectures_id == 28) {
            $prefecture = '兵庫県';
        }
        if ($data->prefectures_id == 29) {
            $prefecture = '奈良県';
        }
        if ($data->prefectures_id == 30) {
            $prefecture = '和歌山';
        }
        if ($data->prefectures_id == 31) {
            $prefecture = '鳥取県';
        }
        if ($data->prefectures_id == 32) {
            $prefecture = '島根県';
        }
        if ($data->prefectures_id == 33) {
            $prefecture = '岡山県';
        }
        if ($data->prefectures_id == 34) {
            $prefecture = '広島県';
        }
        if ($data->prefectures_id == 35) {
            $prefecture = '山口県';
        }
        if ($data->prefectures_id == 36) {
            $prefecture = '徳島県';
        }
        if ($data->prefectures_id == 37) {
            $prefecture = '香川県';
        }
        if ($data->prefectures_id == 38) {
            $prefecture = '愛媛県';
        }
        if ($data->prefectures_id == 39) {
            $prefecture = '高知県';
        }
        if ($data->prefectures_id == 40) {
            $prefecture = '福岡県';
        }
        if ($data->prefectures_id == 41) {
            $prefecture = '佐賀県';
        }
        if ($data->prefectures_id == 42) {
            $prefecture = '長崎県';
        }
        if ($data->prefectures_id == 43) {
            $prefecture = '熊本県';
        }
        if ($data->prefectures_id == 44) {
            $prefecture = '大分県';
        }
        if ($data->prefectures_id == 45) {
            $prefecture = '宮崎県';
        }
        if ($data->prefectures_id == 46) {
            $prefecture = '鹿児島';
        }
        if ($data->prefectures_id == 47) {
            $prefecture = '沖縄県';
        }

        return $prefecture;
    }
}
