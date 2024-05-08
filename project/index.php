<?
    require "DB-CONNECT/connect.php";
    $words = [$subjects, $predicates];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tailwind/output.css">
    <title>Document</title>
</head>

<body data-theme="theme-controller">
    <div class="w-full h-screen flex items-center justify-center">

        <!-- Generator block -->
        <div class="min-w-96 p-6 bg-base-300 rounded-box border-2 border-primary selection:bg-primary selection:text-base-300">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-2xl">Генератор никнеймов</h3>
                <a class="link underline-offset-2 text-xs" href="https://github.com/TheLastCookie-404" target="_blank">By TheLastCocke</a>
            </div>
            <div class="divider"></div>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Your nickname</span>
                </div>
                <textarea
                    id="nameOutput"
                    class="textarea textarea-bordered bg-base-200 caret-primary h-32"
                    placeholder="Press Generate button"></textarea>
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
            <div class="btn btn-active btn-primary w-full" onclick="DisplayNickname('nameOutput');">Generate</div>
        </div>
    </div>

    <script src="./scripts/main.js"></script>
    <script>
        let words = <?= json_encode($words); ?>;
        let tableCell = 1;
        function DisplayNickname(outputId) {
            let nameOutput = document.getElementById(outputId);
            nameOutput.textContent = CreateNickname(words, tableCell);
        }
    </script>
</body>

</html>