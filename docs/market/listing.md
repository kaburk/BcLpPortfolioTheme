# BcLpPortfolioTheme baserマーケット出品 入力値

フォームの欄の順に並べています。

## 基本情報

| 欄 | 入力値 |
|---|---|
| 公開ステータス | 非公開（承認後に公開） |
| テーマ・プラグイン名（商品名） | BcLpPortfolioTheme |
| 種類 | 無料テーマ ／ レスポンシブデザイン |
| 販売価格（税抜） | 0 |
| カテゴリ | プロモーション、シンプル、baserCMS5対応 |
| バージョン | 1.0.0 |
| ファイル名 | BcLpPortfolioTheme.zip |
| ファイルアップロード | `BcLpPortfolioTheme.zip`（GitHub Release の zip と同じもの） |
| 対応バージョン | 5系：5.4.1、5.4.0 |
| 対応バージョン 備考 | baserCMS5.4以上。BurgerEditor（BcBurgerEditor）プラグインが必要です。 |
| ライセンス | URLで指定する ／ 名称：MIT License ／ URL：https://github.com/kaburk/BcLpPortfolioTheme/blob/main/LICENSE |
| 提供者 | 名称：kaburk ／ URL：https://blog.kaburk.com/ |
| Webサイト | 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpPortfolioTheme |
| デモサイト | 空欄 |
| サポートページ | 公式サイト以外 ／ 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpPortfolioTheme/issues |

## 説明概要（一覧画面・200文字以内：189文字）

```
baserCMS5.4以上向けの、フリーランス・個人事業主のための1ページ LP テーマです。制作実績・できること・制作の流れ・料金の目安・お客さまの声・プロフィール・お仕事の相談フォームまでを、BurgerEditor のブロック操作と管理画面の設定だけで編集できます。濃い地に明るいアクセントの配色で、色はテーマ設定の4色で変更できます。見本サイト一式の初期データ付きです。
```

メイン画像：`main.png`（500×500）

---

## 説明情報1

**説明見出し1**：このテーマについて

**説明詳細1**（エディタの「ソース」に貼る）

```html
<p>BcLpPortfolioTheme は、フリーランス・個人事業主の自己紹介と、お仕事の依頼・相談の受付のための、1ページのランディングページ（LP）テーマです。</p>
<p>トップの固定ページ1枚に、セクションを BurgerEditor のブロックで並べる構成です。セクションの追加・削除・並べ替えは、ブロック操作だけでできます。</p>
<ul>
<li>ヒーロー（代表作の画像）／制作実績／できること／制作の流れ／料金の目安／お客さまの声／プロフィール／よくある質問／お仕事の相談（CTA）</li>
<li>濃い地に明るいアクセントの配色です。地はサブ、ボタンや英字はメインの色で、サブを明るい色にすると文字は自動で黒になります</li>
<li>大見出しブロックの「ID設定」に英字（例 works）を入れると、ヘッダーのナビに自動で載り、見出しの上に大きな英字（WORKS）が出ます</li>
<li>お仕事の依頼・相談フォームは入力 → 確認 → 完了の3画面。ご依頼の内容（複数選択）・ご予算・希望の納期（カレンダー）など。項目はメールフィールドで追加・並べ替えできます</li>
<li>テーマ設定の4色（メイン／サブ／リンク／ホバー）で全体の配色が変わります。ロゴもテーマ設定で変更できます</li>
<li>初期データ：見本サイト一式（default）と最小構成（empty）</li>
<li>レスポンシブ（PC／スマホ）、prefers-reduced-motion 対応</li>
</ul>
```

**説明画像1**：`pc-1-hero.png`（PC：ヒーロー）

---

## 説明情報2

**説明見出し2**：動作環境とインストール

**説明詳細2**

```html
<h4>動作環境</h4>
<ul>
<li>baserCMS5.4以上</li>
<li>BurgerEditor（BcBurgerEditor）プラグインが有効であること</li>
</ul>
<h4>インストール</h4>
<ol>
<li>ダウンロードした zip を解凍し、フォルダ名が「BcLpPortfolioTheme」であることを確認して plugins フォルダに配置します（管理画面からのアップロードも可能です）</li>
<li>管理画面 &gt; プラグイン管理 で BcBurgerEditor が有効になっていることを確認します</li>
<li>管理画面 &gt; テーマ管理 で BcLpPortfolioTheme を適用します</li>
<li>同じ画面で初期データ「default」（見本サイト）または「empty」（最小構成）を読み込みます</li>
</ol>
<p><strong>初期データを読み込むと、ユーザー以外のデータ（固定ページ・メールフォーム・サイト基本設定など）は初期化されます。運用中のサイトでは読み込まないでください。</strong></p>
```

**説明画像2**：`sp.png`（スマホ：ファーストビュー・できること・お仕事の相談）

---

## 説明情報3

**説明見出し3**：編集のしかた

**説明詳細3**

```html
<h4>編集できる場所</h4>
<table>
<tr><th>内容</th><th>編集する場所</th></tr>
<tr><td>本文（全セクション）</td><td>固定ページ「トップページ」の BurgerEditor</td></tr>
<tr><td>ロゴ・配色</td><td>テーマ設定（ロゴの画像がないときは、ロゴの代替テキストを文字で出す）</td></tr>
<tr><td>ヘッダーのナビ</td><td>本文の大見出しブロックの「ID設定」（自動で作られる）</td></tr>
<tr><td>「お仕事の相談」ボタンのリンク先</td><td>自動（公開中の最初のメールフォーム）</td></tr>
<tr><td>フォームの説明文・完了メッセージ・項目</td><td>メールフォームの設定・メールフィールド</td></tr>
<tr><td>フッター（名前・SNS）</td><td>ウィジェットエリア「フッター」のテキストウィジェット</td></tr>
</table>
<h4>本文ブロックの独自class</h4>
<p>ブロック設定の「独自class設定」に入れると、決まった見た目になります。</p>
<table>
<tr><th>独自class</th><th>使うブロック</th><th>見た目</th></tr>
<tr><td>pf-blk--hero</td><td>画像右寄せ（テキスト回り込み無し）</td><td>ヒーロー（画像は代表作。空なら円・四角・四分円・輪の図形）</td></tr>
<tr><td>pf-blk--section</td><td>大見出し</td><td>セクション見出し（ID設定でナビと大きな英字）</td></tr>
<tr><td>pf-blk--nonav</td><td>大見出し（pf-blk--section と併用）</td><td>ナビに載せない</td></tr>
<tr><td>pf-blk--works</td><td>画像3列＋テキスト</td><td>制作実績（作品名・担当）</td></tr>
<tr><td>pf-blk--services</td><td>1カラムテキスト</td><td>できること（アイコン付きのカード）</td></tr>
<tr><td>pf-blk--steps</td><td>1カラムテキスト</td><td>制作の流れ（番号の大きなカード）</td></tr>
<tr><td>pf-blk--price</td><td>1カラムテキスト</td><td>料金の目安の表</td></tr>
<tr><td>pf-blk--note</td><td>1カラムテキスト</td><td>表の下の小さな注記</td></tr>
<tr><td>pf-blk--voices</td><td>画像3列＋テキスト</td><td>お客さまの声（画像は使わない）</td></tr>
<tr><td>pf-blk--profile</td><td>画像左寄せ（テキスト回り込み無し）</td><td>プロフィール（写真・経歴・使えるツール・SNS）</td></tr>
<tr><td>pf-blk--faq</td><td>1カラムテキスト</td><td>よくある質問</td></tr>
<tr><td>pf-blk--cta</td><td>1カラムテキスト</td><td>お仕事の相談の CTA（メイン色の角丸の箱）</td></tr>
</table>
<p>ブロック設定の「背景色」は、テーマ色に置き換えています（ブルー＝地より少し明るい面／グレー＝さらに明るい面／ピンク＝メイン色）。</p>
<h4>名前・SNS を変えるとき</h4>
<p>名前は、ヒーロー・プロフィール・フッター・メールフォームの差出人名と件名・テーマ設定のロゴの代替テキストに書かれています。SNS のリンクは、プロフィールとフッターに書かれています。それぞれ直してください。</p>
```

**説明画像3**：`pc-2-works.png`（PC：制作実績）

---

## 説明情報4

**説明見出し4**：配色と制限事項

**説明詳細4**

```html
<h4>配色</h4>
<ul>
<li>初期色は黒（サブ）とネオンのライム（メイン）です。メインは明るい色、サブは濃い色にしてください（ボタンの文字は自動で黒になります）</li>
<li>配色の例：シアン（メイン #3ee6e6・サブ #0d1420）、オレンジ（メイン #ff8a3d・サブ #16120f）</li>
</ul>
<h4>制限事項</h4>
<ul>
<li>名前・SNS などは各ブロックに直接書くため、変更時は複数の場所を直す必要があります</li>
<li>制作実績の詳細ページはありません（画像にリンクを付けると、作品のサイトなどへ移動できます）</li>
</ul>
```

**説明画像4**：`pc-3-services.png`（PC：できること・制作の流れ）

---

## 説明情報5

**説明見出し5**：ソースコード・ライセンス

**説明詳細5**

```html
<p>ソースコードは GitHub で公開しています。不具合の報告・要望は Issues にお願いします。</p>
<p><a href="https://github.com/kaburk/BcLpPortfolioTheme" target="_blank">https://github.com/kaburk/BcLpPortfolioTheme</a></p>
<p>テーマ本体は MIT License です。同梱物・外部リソースのライセンスは次のとおりです。</p>
<ul>
<li>jQuery 3.7.1（同梱）：MIT License</li>
<li>jQuery UI 1.11.4（baserCMS 同梱のものを読み込み）：MIT License</li>
<li>Google Fonts（Noto Sans JP・Space Grotesk、CDN から読み込み）：SIL Open Font License 1.1</li>
<li>アイコン：Lucide のアイコンをもとにしています（ISC License）</li>
</ul>
<p>ご利用は自己責任でお願いします。</p>
```

**説明画像5**：`form.png`（PC：お仕事の依頼・相談フォームの入力画面）

予備：`pc-4-price.png`（PC：料金の目安・お客さまの声）。差し替えたいときに使う。

---

## リリース

| 欄 | 入力値 |
|---|---|
| リリース種別 | 新規公開申請 |
| リリースノート | 新規リリース |

---

## zip の確認結果

GitHub Release 1.0.0 の `BcLpPortfolioTheme.zip` を作ったあとに確認して書く。

- 最上位フォルダ名が `BcLpPortfolioTheme` か（解凍してそのまま plugins に置けるか）
- `config.php`・`config/setting.php`・`VERSION.txt`（1.0.0）・`screenshot.png`・初期データ（default／empty）・`LICENSE`・`README.md` を含むか
- `.github`・`docs`・`.DS_Store`・作業用ファイルを含まないか
