<?php
    require "DB-CONNECT/connect.php";
    // $words = [$subjects, $predicates]; - now in connect.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tailwind/output.css?v=1">
    <title>Document</title>
</head>

<body data-theme="">
    <div class="w-full h-screen flex items-center justify-center">

        <!-- Generator block -->
        <div class="min-w-96 p-6 bg-base-300 rounded-box border-2 border-primary selection:bg-primary selection:text-base-300">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-2xl">Nicknameinator</h3>
                <a class="link underline-offset-2 text-xs" href="https://github.com/TheLastCookie-404" target="_blank">By TheLastCookie</a>
            </div>
            <div class="divider"></div>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Your nickname</span>
                </div>
                <div
                    id="nameOutput"
                    class="bg-base-200 caret-primary h-32 p-2 text-accent "
                    placeholder="Press Generate button">Click Generate to get your nickname!</div>
            </label>
            <div class="flex gap-5 mt-2">
                <form class="flex" name="themes-form">
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input oninput="saveTheme('halloween'); setDataThemeAttr();" type="radio" name="theme-radios" class="radio theme-controller" value="halloween" default/>
                            <span class="label-text">Halloween</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input oninput="saveTheme('retro'); setDataThemeAttr();" type="radio" name="theme-radios" class="radio theme-controller" value="retro" />
                            <span class="label-text">Retro</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input oninput="saveTheme('cyberpunk'); setDataThemeAttr();" type="radio" name="theme-radios" class="radio theme-controller" value="cyberpunk" />
                            <span class="label-text">Cyberpunk</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input oninput="saveTheme('valentine'); setDataThemeAttr();" type="radio" name="theme-radios" class="radio theme-controller" value="valentine" />
                            <span class="label-text">Valentine</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-4">
                            <input oninput="saveTheme('aqua'); setDataThemeAttr();" type="radio" name="theme-radios" class="radio theme-controller" value="aqua" />
                            <span class="label-text">Aqua</span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <div class="btn btn-active btn-primary w-full" onclick="DisplayNickname('nameOutput');">Generate</div>
        </div>
    </div>

    <script src="./scripts/main.js"></script>
    <script>
        // words variable now in connect.php
        let tableCell = 1;
        function DisplayNickname(outputId) {
            let nameOutput = document.getElementById(outputId);
            nameOutput.textContent = CreateNickname(words, tableCell);
        }

        setRadioByStorredTheme(getTheme(), document['themes-form']['theme-radios']);
    </script>
</body>

</html>