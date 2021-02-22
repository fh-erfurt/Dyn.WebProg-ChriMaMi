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
                    <div class="row">
                        <div class="userID"><ul><?= $member->id ?></ul></div>
                        <div class="email"><ul><?= $member->email ?></ul></div>
                        <div class="firstname"><ul><?= $member->firstname ?></ul></div>
                        <div class="lastname"><ul><?= $member->lastname ?></ul></div>
                        <div class="gender"><ul><?= $member->gender ?></ul></div>
                        <div class="role"><ul><?= $member->roll ?></ul></div>
                        <div class="iconImg">
                            <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=administration&a=remove&member=<?=$member->id?>">
                                <img src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'delete.png' ?> " alt="Entfernen"/>
                            </a>
                        </div>

                    </div>
                <? endforeach; ?>
            </section>
        </form>
    </main>
</div>