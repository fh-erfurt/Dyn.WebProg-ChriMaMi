<div id="administration-wraper">
    <?require_once SHAREDPATH . 'adminnav.php'; ?>

    <main>
        <form>
            <h2> Finde und Verwalte Nutzer </h2>
            <section id="managementTable">
                <div class="tableHeader">
                    <div class="userID"><ul>UserID</ul></div>
                    <div class="email"><ul>Email</ul></div>
                    <div class="firstname"><ul>Vorname</ul></div>
                    <div class="lastname"><ul>Nachname</ul></div>
                    <div class="gender"><ul>(m/w/d)</ul></div>
                    <div class="role"><ul>Rolle</ul></div>
                    <div class="kill"><ul></ul></div>
                </div>

                <? foreach ($members as $member): ?>
                <? if ($member->id % 2 === 0): ?>
                    <div class="gray">
                <? else: ?>
                    <div class="white">
                <? endif; ?>
                        <div class="userID"><ul><?= $member->id ?></ul></div>
                        <div class="email"><ul><?= $member->email ?></ul></div>
                        <div class="firstname"><ul><?= $member->firstname ?></ul></div>
                        <div class="lastname"><ul><?= $member->lastname ?></ul></div>
                        <div class="gender"><ul><?= $member->gender ?></ul></div>
                        <div class="role"><ul><?= $member->roll ?></ul></div>
                        <div><img src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'delete.png' ?> " alt="Entfernen"/></div>
                    </div>
                <? endforeach; ?>
            </section>
        </form>
    </main>
</div>