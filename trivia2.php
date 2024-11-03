<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Context Boxes</title>
    <style>
        .context-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .context-box {
            margin: 5px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            flex-basis: calc(33% - 10px);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .context-box {
                flex-basis: calc(50% - 10px);
            }
        }

        @media (max-width: 480px) {
            .context-box {
                flex-basis: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="context-container">
        <div class="context-box">Weblingua</div>
        <div class="context-box">Home</div>
        <div class="context-box">Trivia</div>
        <div class="context-box">About Us</div>
        <div class="context-box">Admin</div>
        <div class="context-box">Tagalog language</div>
        <div class="context-box">Did you know!</div>
        <div class="context-box">Fun fact:</div>
        <div class="context-box">Language Family:</div>
        <div class="context-box">Dictionary site:</div>
        <div class="context-box">Book site:</div>
    </div>
</body>
</html>