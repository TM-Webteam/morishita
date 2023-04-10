<?php get_header(); ?>

<main class="contact">

  <section class="hero-lower core">
    <div class="containers">
      <div class="hero-lower__box">
        <h1 class="ttl-primary">お問合せ・ご相談</h1>
        <div class="hero-lower__box--sub">差別化できる商品開発に関するお問合せ・ご相談はお気軽にご連絡ください。</div>
      </div>
    </div>
  </section>

  <section id="kairos" class="form">
    <div class="containers">
      <div class="form__note">
        <p>● 以下フォームにご連絡先、お問合せ内容をご記入の上、送信してください。担当よりご連絡申し上げます。</p>
        <p>● 回答までにお時間をいただく場合や、回答ができない場合もございますので、ご了承ください。</p>
      </div>
      <!-- これはカスタムフォームのサンプルコードです。 -->
      <!-- ヘルプ https://kairos3.com/help/show_tutorial?tutorial_id=5 -->

      <!-- 登録成功時の応答→301リダイレクト(name=redで指定) -->
      <!-- 登録失敗時の応答→400エラーもしくは302リダイレクト(name=red_errorで指定) -->
      <!-- 詳細は上記ヘルプの｢カスタムフォームのエラー処理｣を参照ください。 -->

      <!-- サポートしている文字コード：UTF-8 -->
      <!-- 必須項目：f_item_mail, opt, red, api_key -->

      <form action="https://form.k3r.jp/morishitajintan/contact" method="POST">
        <div class="form__ttl">お問合せ・ご相談フォーム</div>
        <div class="form__table">
          <table>
            <colgroup>
              <col>
              <col>
            </colgroup>
            <tr>
              <th class="flex aiC">
                <span class="item">会社名</span>
                <span class="required"></span>
              </th>
              <td><input type="text" name="f_item_company_name" value="" /></td>
            </tr>
            <tr>
              <th class="flex aiC">
                <span class="item">部署名</span>
                <span class="required"></span>
              </th>
              <td><input type="text" name="f_item_division" value="" /></td>
            </tr>
            <tr>
              <th class="flex aiC">
                <span class="item">ご担当者名</span>
                <span class="required"></span>
              </th>
              <td>
                <div class="flex aiC">
                  <p class="flex fS aiC half"><span>姓：</span><input type="text" name="f_item_name_last" value="" /></p>
                  <p class="flex fS aiC half"><span>名：</span><input type="text" name="f_item_name_first" value="" /></p>
                </div>
              </td>
            </tr>
            <tr>
              <th class="flex aiC">
                <span class="item">メールアドレス</span>
                <span class="required"></span>
              </th>
              <td><input type="text" name="f_item_mail" value="" /></td>
            </tr>
            <tr>
              <th class="flex aiC">
                <span class="item">電話番号</span>
                <span class="required"></span>
              </th>
              <td><input type="text" name="f_item_tel" value="" /></td>
            </tr>
            <tr>
              <th class="flex aiC">
                <span class="item">お問合せしたいサービス</span>
                <span class="required"></span>
              </th>
              <td>
                <label class="flex fS aiC"><input type="checkbox" name="f_item_select3[]" value="ローズヒップポリフェノール" />ローズヒップポリフェノール</label>
                <label class="flex fS aiC"><input type="checkbox" name="f_item_select3[]" value="カシスエキス" />カシスエキス</label>
                <label class="flex fS aiC"><input type="checkbox" name="f_item_select3[]" value="サラシアエキス" />サラシアエキス</label>
                <label class="flex fS aiC"><input type="checkbox" name="f_item_select3[]" value="シームレスカプセル受託" />シームレスカプセル受託</label>
                <label class="flex fS aiC"><input type="checkbox" name="f_item_select3[]" value="サプリメントOEM受託" />サプリメントOEM受託</label>
              </td>
            </tr>
            <tr>
              <th class="flex aiC">
                <span class="item">お問合せ内容詳細</span>
                <span class="required"></span>
              </th>
              <td><textarea name="f_item_free1" rows="12" placeholder="お問合せ内容詳細"></textarea></td>
            </tr>
            <tr>
              <th class="flex aiC">
                <span class="item">個人情報の取扱いについて</span>
                <span class="required"></span>
              </th>
              <td><label class="flex fS aiC"><input type="radio" name="f_item_radio5[]" value="同意する" />同意する</label><p>弊社Webサイトの<a href="https://www.jintan.co.jp/privacy/" target="_blank">プライバシーポリシー</a>をご確認の上、ご同意いただき送信をお願いいたします。いただきました個人情報及びご質問内容は、お問合せご対応のためにのみ利用し、その他の目的では利用いたしません。</p></td>
            </tr>
            <!-- ↓↓↓必須↓↓↓ -->
            <input type="hidden" name="api_key" value="1900848be94a5719f9f4f518ca43e60076343bce" />
            <input type="hidden" name="opt" value="1" /><!-- メール配信 承諾=1 未承諾=0 -->
            <input type="hidden" name="red" value="/contact/thanks/" />

            <!-- ↓↓↓オプション↓↓↓ -->
            <input type="hidden" name="red_error" value="フォーム登録エラー時のリダイレクト先URL (例: https://example.com/error.html)" />
            <input type="hidden" name="tag" value="フォーム登録時に付与したいリードタグ(カンマ区切りで複数可) (例: メロン,トマト)" />

            <!-- ↓↓↓テストモード↓↓↓ -->
            <!-- カスタムフォームの動作テストをしたい場合は｢false｣を｢true｣にしてください。 -->
            <!-- テストモードでは実際のフォーム登録は行われませんが自動返信メール等は送信されます。 -->
            <input type="hidden" name="test_mode" value="false" />
            <!-- テストモードにおいて、フォーム登録が正しく行えることを確認したい場合にご使用ください。 -->
            <!-- 以下の｢value｣に指定したメールアドレスにリード情報(登録通知の内容と同様)が送られます -->
            <input type="hidden" name="test_mail" value="" />
          </table>
          <button type="submit" class="more bgY" value="送信">確認画面へ進む</button>
        </div>
      </form>
      
    </div>
  </section>

</main>

<?php get_footer(); ?>