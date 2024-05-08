<?
    require "DB-CONNECT/connect.php";
    $words = [$subjects, $predicates];
    var_dump($_POST)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tailwind/output.css?v=1">
    <title>Document</title>
</head>

<body data-theme="theme-controller">
    <div class="w-full h-screen flex items-center justify-center">

        <!-- Admin block -->
        <div class="min-w-96 p-6 bg-base-300 rounded-box border-2 border-primary selection:bg-primary selection:text-base-300 caret-primary">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-2xl">Admin panel</h3>
                <a class="link underline-offset-2 text-xs" href="https://github.com/TheLastCookie-404" target="_blank">By TheLastCocke</a>
            </div>
            <div class="divider"></div>
            <form action="" method="post">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Enter subjects</span>
                        <span class="label-text-alt">use spaces with several words</span>
                    </div>
                    <textarea
                        class="textarea textarea-bordered bg-base-200 h-24"
                        name="subjects"
                        placeholder="Type here"></textarea>
                    <div class="collapse rounded-none">
                        <input type="checkbox" />
                        <div class="collapse-title text-sm font-medium px-1 py-3 flex items-center justify-between">
                            Click me to show SUBJECTS 
                        </div>
                        <div class="collapse-content px-1"> 
                            <div class="max-h-56 overflow-y-scroll mb-4">
                                <? foreach($subjects as $subject) { ?>
                                    <div class="flex justify-between px-3">
                                        <p><?= $subject[1] ?></p>
                                        <input type="checkbox" class="checkbox checkbox-sm checkbox-primary" />
                                    </div>
                                    <div class="divider my-2"></div>
                                <? } ?>
                            </div>
                            <div class="flex justify-start gap-3">
                                <a href="" class="btn btn-sm btn-error">DELETE</a>
                                <a href="" class="btn btn-sm btn-success">EDIT</a>
                            </div>
                        </div>
                    </div>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Enter predicates</span>
                        <span class="label-text-alt">use spaces with several words</span>
                    </div>
                    <textarea
                        class="textarea textarea-bordered bg-base-200 h-24"
                        name="predicates"
                        placeholder="Type here"></textarea>
                    <div class="collapse rounded-none">
                        <input type="checkbox" /> 
                        <div class="collapse-title text-sm font-medium pl-1 flex items-center">
                            Click me to show PREDICATES 
                        </div>
                        <div class="collapse-content pl-1 max-h-56 overflow-y-scroll"> 
                            <? foreach($predicates as $predicate) { ?>
                                <p><?= $predicate[1] ?></p>
                                <div class="divider my-2"></div>
                            <? } ?>
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
                <input type="submit" value="Send" class="btn btn-active btn-primary w-full">
            </form>
        </div>
    </div>
</body>

</html>