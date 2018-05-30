<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>初期費用シミュレーター</title>
</head>
<body>
    <header>
        <h1>一人暮らしシミュレーター</h1>
    </header>
    <main>
        <div class="container">
            <h2>必須な初期費用</h2>
            <p>生活するうえである最低限必須だと思われる物です、人によっては既に持っている物やほかにも必要な物があると思うので、参考にしてください。</p>
            <dl>
                <section id="section1">
                    <dt>家賃(管理費・駐車場など含む)<span class="value">= {{ totalCost1 }}</span></dt>
                    <dd>
                        <ul>
                            <li>敷金<span class="value"><input v-model.number="cost1" type="number">円</span></li>
                            <li>礼金<span class="value"><input v-model.number="cost2" type="number">円</span></li>
                            <li>仲介手数料<span class="value"><input v-model.number="cost3" type="number">円</span></li>
                            <li>日割り家賃<span class="value"><input v-model.number="cost4" type="number">円</span>  </li>
                            <li>前家賃<span class="value"><input v-model.number="cost5" type="number">円</span></li>
                            <li>その他<span class="value"><input v-model.number="cost6" type="number">円</span></li>
                        </ul>
                        <p>条件によっては前家賃や鍵の交換費用など、様々な費用がかかりますので実際に管理会社等に問い合わせて確認しておきましょう。</p>
                    </dd>
                </section>
                <section id="section2">
                    <dt>家電<span class="value">= {{ totalCost2 }}</span></dt>
                    <dd>
                        <ul>
                            <li>電子レンジ<span class="value"><input v-model.number="cost1" type="text">円</span></li>
                            <li>炊飯器<span class="value"><input v-model.number="cost2" type="text">円</span></li>
                            <li>冷蔵庫<span class="value"><input v-model.number="cost3" type="text">円</span></li>
                            <li>洗濯機<span class="value"><input v-model.number="cost4" type="text">円</span></li>
                            <li>掃除機<span class="value"><input v-model.number="cost5" type="text">円</span></li>
                            <li>ドライヤー<span class="value"><input v-model.number="cost6" type="text">円</span></li>
                            <li>その他<span class="value"><input v-model.number="cost7" type="text">円</span></li>
                        </ul>
                    </dd>
                </section>
                <section id="section3">
                    <dt>家具<span class="value">= {{ totalCost3 }}</span></dt>
                    <dd>
                        <ul>
                            <li>寝具<span class="value"><input v-model.number="cost1" type="text">円</span></li>
                            <li>テーブル<span class="value"><input v-model.number="cost2" type="text">円</span></li>
                            <li>椅子<span class="value"><input v-model.number="cost3" type="text">円</span></li>
                            <li>カーテン<span class="value"><input v-model.number="cost4" type="text">円</span></li>
                            <li>その他<span class="value"><input v-model.number="cost5" type="text">円</span></li>
                        </ul>
                    </dd>
                </section>
                <section id="section4">
                    <dt>生活用品<span class="value">= {{ totalCost4 }}</span></dt>
                    <dd>
                        <ul>
                            <li>生活用品<span class="example">・・・トイレットペーパー、ティッシュペーパー、ゴミ袋</span><span class="value"><input v-model.number="cost1" type="text">円</span></li>
                            <li>キッチン用品<span class="example">・・・包丁、調味料、フライパン、食器など</span><span class="value"><input v-model.number="cost2" type="text">円</span></li>
                            <li>洗面台まわり<span class="example">・・歯ブラシ、歯磨き粉</span><span class="value"><input v-model.number="cost3" type="text">円</span></li>
                            <li>バス用品<span class="example">・・・シャンプー、ボディソープ、タオル</span><span class="value"><input v-model.number="cost4" type="text">円</span></li>
                            <li>洗濯用品<span class="example">・・・ハンガー、洗剤</span><span class="value"><input v-model.number="cost5" type="text">円</span></li>
                            <li>その他<span class="value"><input v-model.number="cost6" type="text">円</span></li>
                        </ul>
                    </dd>
                </section>
                <section id="section5">
                    <dt>引っ越し費用<span class="value">= {{ totalCost5 }}</span></dt>
                    <dd>
                        <ul>
                            <li>引っ越し料金<span class="value"><input v-model.number="cost1" type="text">円</span></li>
                            <li>段ボール<span class="value"><input v-model.number="cost2" type="text">円</span></li>
                        </ul>
                    </dd>
                </section>
            </dl>
        </div>
    </main>
    <footer>
        <p>© 2018 qwertyuiopngsdfg</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="myapp.js"></script>
</body>
</html>