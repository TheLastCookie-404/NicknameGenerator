<?php
    require "DB-CONNECT/connect.php";
    // $words = [$subjects, $predicates]; - now in connect.php
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tailwind/output.css?v=2">
    <title>Document</title>
</head>

<body data-theme="theme-controller">
    <div class="w-full h-screen flex items-center justify-center">

        <!-- Admin block -->
        <div class="min-w-96 p-6 bg-base-300 rounded-box border-2 border-primary selection:bg-primary selection:text-base-300 caret-primary">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-2xl">Admin panel</h3>
                <a class="link underline-offset-2 text-xs" href="https://github.com/TheLastCookie-404" target="_blank">By TheLastCookie</a>
            </div>
            <div class="divider"></div>
            <form id="form1" action="./DB-MANAGEMENT/load.php" method="post">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Enter subjects</span>
                        <span class="label-text-alt">use spaces with several words</span>
                    </div>
                    <textarea
                        id="subjectsTxtArea"
                        class="textarea textarea-bordered bg-base-200 h-24"
                        name="enteredSubjects"
                        placeholder="Type here"></textarea>
                    <div class="collapse rounded-none">
                        <input type="checkbox" />
                        <div class="collapse-title text-sm font-medium px-1 py-3 flex items-center">
                            <span>Click me to show SUBJECTS: <span class="text-success font-light"><?= count($subjects) ?></span></span>
                        </div>
                        <div class="collapse-content px-1">
                            <div class="max-h-56 overflow-y-scroll mb-4">
                                <? foreach($subjects as $subject) { ?>
                                    <div class="flex justify-between px-3">
                                        <p><?= $subject[1] ?></p>
                                        <input name="selectedSubjects[]" value="<?= $subject[0] ?>" type="checkbox" class="checkbox checkbox-sm checkbox-primary subjCheck" />
                                    </div>
                                    <div class="divider my-2"></div>
                                <? } ?>
                            </div>
                            <div class="flex justify-start gap-3">
                                <div onclick="Btn('form1', './DB-MANAGEMENT/delete.php', 'formSubmit', 'oklch(var(--er))', 'DELETE SELECTED WORDS')" class="btn btn-sm btn-error">DELETE</div>
                                <div onclick="Btn('form1', './DB-MANAGEMENT/load.php', 'formSubmit', 'oklch(var(--p))', 'SEND'); AllCheckboxesDisable();" class="btn btn-sm btn-warning">CANCEL</div>
                                <div onclick="Btn('form1', './DB-MANAGEMENT/update.php', 'formSubmit', 'oklch(var(--su))', 'EDIT SELECTED WORDS'); DisplaySelectedWords(words[0], 1, 'subjectsTxtArea', 'subjCheck')"class="btn btn-sm btn-success">EDIT</div>
                            </div>
                        </div>
                    </div>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Enter predicates</span>
                        <span class="label-text-alt">use spaces with several words</span>
                    </div>
                    <textarea
                        id="predicatesTxtArea"
                        class="textarea textarea-bordered bg-base-200 h-24"
                        name="enteredPredicates"
                        placeholder="Type here"></textarea>
                    <div class="collapse rounded-none">
                        <input type="checkbox" /> 
                        <div class="collapse-title text-sm font-medium px-1 py-3 flex items-center">
                            <span>Click me to show PREDICATES: <span class="text-success font-light"><?= count($predicates) ?></span></span>
                        </div>
                        <div class="collapse-content px-1"> 
                            <div class="max-h-56 overflow-y-scroll mb-4">
                                <? foreach($predicates as $predicate) { ?>
                                    <div class="flex justify-between px-3">
                                        <p><?= $predicate[1] ?></p>
                                        <input name="selectedPredicates[]" value="<?= $predicate[0] ?>" type="checkbox" class="checkbox checkbox-sm checkbox-primary predCheck" />
                                    </div>
                                    <div class="divider my-2"></div>
                                <? } ?>
                            </div>
                            <div class="flex justify-start gap-3">
                                <div onclick="Btn('form1', './DB-MANAGEMENT/delete.php', 'formSubmit', 'oklch(var(--er))', 'DELETE SELECTED WORDS')" class="btn btn-sm btn-error">DELETE</div>
                                <div onclick="Btn('form1', './DB-MANAGEMENT/load.php', 'formSubmit', 'oklch(var(--p))', 'SEND'); AllCheckboxesDisable();" class="btn btn-sm btn-warning">CANCEL</div>
                                <div onclick="Btn('form1', './DB-MANAGEMENT/update.php', 'formSubmit', 'oklch(var(--su))', 'EDIT SELECTED WORDS'); DisplaySelectedWords(words[1], 1, 'predicatesTxtArea', 'predCheck');"class="btn btn-sm btn-success">EDIT</div>
                            </div>
                        </div>
                    </div>
                </label>
                <div class="flex gap-5 mt-2">
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input type="radio" name="theme-radios" class="radio theme-controller" value="halloween" checked/>
                            <span class="label-text">Halloween</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input type="radio" name="theme-radios" class="radio theme-controller" value="retro" />
                            <span class="label-text">Retro</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input type="radio" name="theme-radios" class="radio theme-controller" value="cyberpunk" />
                            <span class="label-text">Cyberpunk</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input type="radio" name="theme-radios" class="radio theme-controller" value="valentine" />
                            <span class="label-text">Valentine</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input type="radio" name="theme-radios" class="radio theme-controller" value="aqua" />
                            <span class="label-text">Aqua</span>
                        </label>
                    </div>
                </div>
                <div class="divider"></div>
                <input id="formSubmit" type="submit" value="SEND" class="btn btn-active btn-primary w-full">
            </form>
        </div>
    </div>
    <script src="./scripts/main.js"></script>
</body>

</html>