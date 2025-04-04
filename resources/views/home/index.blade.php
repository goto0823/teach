@include('layouts.page')
    <div class="">
        <main class="w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="flex flex-row justify-around">
                <div>
                    <h2>
                        調理中
                    </h2>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-left">オーダー時間</th>
                                <th class="text-left">テーブル番号</th>
                                <th class="text-left">注文内容</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div>
                    <h2>
                        調理済
                    </h2>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-left">オーダー時間</th>
                                <th class="text-left">テーブル番号</th>
                                <th class="text-left">注文内容</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </main>
    </div>
@include('layouts.footer')
    
