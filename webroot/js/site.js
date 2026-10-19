/**
 * BcLpPortfolioTheme : baserCMS5 ポートフォリオ LP テーマ
 *
 * 共通 JS（jQuery 不要）
 * - SP メニューの開閉
 * - セクション見出しの英字ラベル（ブロックの ID から生成）
 * - メールフォームの確認画面で、チェックボックスの値を表示する
 * - メールフォームの送信モード設定（BcMail の form-submit.js の代わり）
 */
(function () {
	'use strict';

	// SP メニュー
	var burger = document.querySelector('[data-pf-drawer-toggle]');
	var drawer = document.getElementById('pf-drawer');
	if (burger && drawer) {
		var setMenu = function (open) {
			burger.setAttribute('aria-expanded', open ? 'true' : 'false');
			burger.setAttribute('aria-label', open ? 'メニューを閉じる' : 'メニューを開く');
			drawer.hidden = !open;
		};
		burger.addEventListener('click', function () { setMenu(drawer.hidden); });
		drawer.querySelectorAll('a').forEach(function (a) {
			a.addEventListener('click', function () { setMenu(false); });
		});
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && !drawer.hidden) { setMenu(false); burger.focus(); }
		});
	}

	// セクション見出しの英字ラベル：ID「bge-works」→「WORKS」（見出しの枠に付け、見出しの上に出す）
	document.querySelectorAll('.bge-contents > .pf-blk--section[id^="bge-"]').forEach(function (el) {
		var label = el.id.replace(/^bge-/, '').replace(/-and-/g, ' & ').replace(/[-_]+/g, ' ').toUpperCase();
		var box = el.querySelector('.bgt-title-h2-container');
		if (label && box) { box.setAttribute('data-pf-label', label); }
	});

	// メールフォームの確認画面：チェックボックスの値は hidden でしか出ないので、文字として表示する
	document.querySelectorAll('.pf-form.is-confirm span[id^="FieldMessage"]').forEach(function (span) {
		if (span.textContent.trim()) { return; }
		var values = [];
		span.querySelectorAll('input[type="hidden"][name$="[]"]').forEach(function (input) {
			if (input.value) { values.push(input.value); }
		});
		if (values.length) { span.appendChild(document.createTextNode(values.join('、'))); }
	});

	// メールフォーム：押したボタンに応じて mode を設定（Confirm / Back / Submit）
	var mode = document.getElementById('MailMessageMode');
	if (mode) {
		document.querySelectorAll('.form-submit').forEach(function (btn) {
			btn.addEventListener('click', function () {
				btn.style.pointerEvents = 'none';
				mode.value = (btn.id || '').replace('BtnMessage', '');
			});
		});
	}
})();
