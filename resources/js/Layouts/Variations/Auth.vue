<template>
    <div class="bg-image" style="background-image: url('/images/bg/photo28@2x.jpg');">
        <div class="row g-0 bg-primary-dark-op">
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div style="font-size: 12px;" class="p-4 p-xl-5 flex-grow-1 text-white-75">
                    <p
                        class="mb-0"
                    >【2005年4月1日～個人情報保護法施行に伴う一般的な注意事項】</p>
                    <p>この掲示についてのご意見は、support@ympc-llv.com へお願いします。</p>
                    <div>
                        <div></div>
                        <div>
                            <b>ログインとログアウト</b>
                            <ul>
                                <li>作業に使用するPCがウィルスに感染していないことを予め確認してください。</li>
                                <li>定められた作業エリア外からはログインしないでください。</li>
                                <li>短時間でも席を離れる場合は必ずログアウトしてください。</li>
                            </ul>
                            <b>パスワードの管理</b>
                            <ul>
                                <li>パスワードを他人に漏らさないよう充分ご注意ください。</li>
                                <li>パスワードは定期的に変更することをお勧めします。</li>
                            </ul>

                            <b>ダウンロードファイルの流出防止</b>
                            <ul>
                                <li>ダウンロードしてファイルに保存すると、そのファイルの管理責任が発生します。</li>
                                <li>必要な項目、検索条件の範囲を越えてダウンロードしないでください。</li>
                                <li>保存したファイルは目的の作業が終了したら完全削除し削除記録を残してください。</li>
                                <li>メディアやメール添付等で外部に持ち出す場合は更に重い管理責任が加わります。</li>
                            </ul>

                            <b>個人情報登録時の注意</b>
                            <ul>
                                <li>新規登録・一括登録しようとしている個人情報は、収集の目的を通知して本人から収集の同意を得たものであることを確認してください。</li>
                            </ul>
                            <b>作業履歴の保存</b>
                            <ul>
                                <li>ログイン成功、ログイン失敗、ログアウト、および更新・ダウンロード等の作業履歴はデータベースに保存されます。</li>
                            </ul>

                            <b>規定の遵守</b>
                            <ul>
                                <li>その他、御社の個人情報保護に関する規定を確認して遵守の上ご利用ください。</li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-100 d-none">
                        <InertiaLink
                            href="/"
                            class="link-fx fw-semibold fs-2 text-white"
                        >{{ $store.getters.appName }}</InertiaLink>
                        <p
                            class="text-white-75 me-xl-8 mt-2 d-none"
                        >Welcome to your amazing app. Feel free to login and start managing your projects and clients.</p>
                    </div>
                </div>
                <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                    <p class="fw-medium text-white-50 mb-0">
                        <strong>{{ $store.getters.appName }}</strong> ©
                        <span
                            data-toggle="year-copy"
                            class="js-year-copy-enabled"
                        >{{ $store.getters.appCopyright }}</span>
                    </p>
                    <ul class="list list-inline mb-0 py-2" v-if="false">
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-light">
                <slot></slot>

                <div
                    class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start"
                >
                    <p class="fw-medium text-black-50 py-2 mb-0">
                        <strong>{{ $store.getters.appName }}</strong> ©
                        <span
                            data-toggle="year-copy"
                            class="js-year-copy-enabled"
                        >{{ $store.getters.appCopyright }}</span>
                    </p>
                    <ul class="list list-inline py-2 mb-0" v-if="false">
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
</script>
