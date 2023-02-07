<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.register') }}">
            @csrf

            <!-- Name Kanji -->
            <div>
                <x-label for="name_kanji" :value="__('名前（漢字）')" />

                <x-input id="name_kanji" class="block mt-1 w-full" type="text" name="name_kanji" :value="old('name_kanji')"
                    required autofocus />
            </div>

            <!-- Name Furigana-->
            <div class="mt-4">
                <x-label for="name_furigana" :value="__('名前（ふりがな）')" />

                <x-input id="name_furigana" class="block mt-1 w-full" type="text" name="name_furigana"
                    :value="old('name_furigana')" required autofocus />
            </div>

            <!-- Age -->
            <div class="mt-4">
                <x-label for="age" :value="__('年齢')" />
                <select name="age" id="age" required
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-full">
                    <option value="">選択してください</option>
                    <option value="19">19歳</option>
                    <option value="20">20歳</option>
                    <option value="21">21歳</option>
                    <option value="22">22歳</option>
                    <option value="23">23歳</option>
                    <option value="24">24歳</option>
                    <option value="25">25歳</option>
                    <option value="26">26歳</option>
                    <option value="27">27歳</option>
                    <option value="28">28歳</option>
                    <option value="29">29歳</option>
                    <option value="30">30歳</option>
                    <option value="31">31歳</option>
                    <option value="32">32歳</option>
                    <option value="33">33歳</option>
                    <option value="34">34歳</option>
                    <option value="35">35歳</option>
                    <option value="36">36歳</option>
                    <option value="37">37歳</option>
                    <option value="38">38歳</option>
                    <option value="39">39歳</option>
                    <option value="40">40歳</option>
                    <option value="41">41歳</option>
                    <option value="42">42歳</option>
                    <option value="43">43歳</option>
                    <option value="44">44歳</option>
                    <option value="45">45歳</option>
                    <option value="46">46歳</option>
                    <option value="47">47歳</option>
                    <option value="48">48歳</option>
                    <option value="49">49歳</option>
                    <option value="50">50歳</option>
                    <option value="51">51歳</option>
                    <option value="52">52歳</option>
                    <option value="53">53歳</option>
                    <option value="54">54歳</option>
                    <option value="55">55歳</option>
                    <option value="56">56歳</option>
                    <option value="57">57歳</option>
                    <option value="58">58歳</option>
                    <option value="59">59歳</option>
                    <option value="60">60歳</option>
                    <option value="61">61歳</option>
                    <option value="62">62歳</option>
                    <option value="63">63歳</option>
                    <option value="64">64歳</option>
                    <option value="65">65歳</option>
                    <option value="66">66歳</option>
                    <option value="67">67歳</option>
                    <option value="68">68歳</option>
                    <option value="69">69歳</option>
                    <option value="70">70歳</option>
                </select>
                </select>
            </div>

            <!-- Gender -->
            <div class="mt-4">
                <x-label for="male" :value="__('性別')" />
                <div class="flex">
                    <div class="mr-6 flex">
                        <x-input id="male" type="radio" name="gender" value="0" :value="old('male')"  required/>
                        <x-label for="male" :value="__('男性')" />
                    </div>
                    <div class="flex">
                        <x-input id="female" type="radio" name="gender" value="1" :value="old('female')" />
                        <x-label for="female" :value="__('女性')" />
                    </div>
                </div>
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Prefectures -->
            <div class="mt-4">
                <x-label for="prefectures" :value="__('都道府県')" />
                <select name="prefectures" id="prefectures" required
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-full">
                    <option value="">選択してください</option>
                    <option value="1">北海道</option>
                    <option value="2">青森県</option>
                    <option value="3">岩手県</option>
                    <option value="4">宮城県</option>
                    <option value="5">秋田県</option>
                    <option value="6">山形県</option>
                    <option value="7">福島県</option>
                    <option value="8">茨城県</option>
                    <option value="9">栃木県</option>
                    <option value="10">群馬県</option>
                    <option value="11">埼玉県</option>
                    <option value="12">千葉県</option>
                    <option value="13">東京都</option>
                    <option value="14">神奈川県</option>
                    <option value="15">新潟県</option>
                    <option value="16">富山県</option>
                    <option value="17">石川県</option>
                    <option value="18">福井県</option>
                    <option value="19">山梨県</option>
                    <option value="20">長野県</option>
                    <option value="21">岐阜県</option>
                    <option value="22">静岡県</option>
                    <option value="23">愛知県</option>
                    <option value="24">三重県</option>
                    <option value="25">滋賀県</option>
                    <option value="26">京都府</option>
                    <option value="27">大阪府</option>
                    <option value="28">兵庫県</option>
                    <option value="29">奈良県</option>
                    <option value="30">和歌山県</option>
                    <option value="31">鳥取県</option>
                    <option value="32">島根県</option>
                    <option value="33">岡山県</option>
                    <option value="34">広島県</option>
                    <option value="35">山口県</option>
                    <option value="36">徳島県</option>
                    <option value="37">香川県</option>
                    <option value="38">愛媛県</option>
                    <option value="39">高知県</option>
                    <option value="40">福岡県</option>
                    <option value="41">佐賀県</option>
                    <option value="42">長崎県</option>
                    <option value="43">熊本県</option>
                    <option value="44">大分県</option>
                    <option value="45">宮崎県</option>
                    <option value="46">鹿児島県</option>
                    <option value="47">沖縄県</option>
                </select>
                </select>
            </div>

            <!-- Municipalities -->
            <div class="mt-4">
                <x-label for="municipalities" :value="__('住所')" />

                <x-input id="municipalities" class="block mt-1 w-full" type="text" name="municipalities"
                    :value="old('municipalities')" required autofocus />
            </div>

            <!-- Current Job -->
            <div class="mt-4">
                <x-label for="current_job" :value="__('現在の職業')" />
                <select name="current_job" id="current_job" required
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-full">
                    <option value="">選択してください</option>
                    <option value="1">公務員</option>
                    <option value="2">経営者・役員</option>
                    <option value="3">会社員</option>
                    <option value="4">自営業</option>
                    <option value="5">自由業</option>
                    <option value="6">専業主婦</option>
                    <option value="7">パート・アルバイト</option>
                    <option value="8">学生</option>
                    <option value="9">その他</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('パスワード確認')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-between mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.login') }}">
                    {{ __('登録済みの方はこちら') }}
                </a>

                <x-button class="ml-4">
                    {{ __('登録する') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
