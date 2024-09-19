<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body table {
            font-family: 'Arial';
            font-weight: 400;
            font-size: 11px;
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid #dee2e6;
        }

        table table {
            width: 100%;
            border: none;
        }

        table table td {
            border: none;
        }

        /* Remove border from the first row of the nested table */
        table table tr:first-child td {
            border-top: none;
        }

        table table tr td {
            border-bottom: 1px solid #dee2e6;
        }

        /* Remove border from the last row of the nested table */
        table table tr:last-child td {
            /* border-bottom: none; */
        }
    </style>
</head>

<body>
    <table class="table table-bordered">
        <tr>
            <td colspan="3">Name</td>
            <td colspan="5">Rank</td>
        </tr>
        <tr>
            <td colspan="3">Position</td>
            <td colspan="5">Unit Assignment</td>
        </tr>
        <tr>
            <td colspan="8">Years & Months</td>
        </tr>
        <tr>
            <td>Parts</td>
            <td>Dimensions</td>
            <td>Performance</td>
            <td class="text-center">Point Allocation</td>
            <td></td>
            <td class="text-center">Numerical Rating</td>
            <td></td>
            <td class="text-center">Weighted Score</td>
        </tr>
        <tr>
            <td class="text-center">I</td>
            <td class="text-center">Output (15 points)</td>
            <td style="background-color: #dee2e6;  margin-top: 0!important; padding: 0!important; margin-bottom: -25px!important;">
                <table class="table">
                    <tr>
                        <td>a. Quality of Work</td>
                    </tr>
                    <tr>
                        <td>b. Timeliness of Work</td>
                    </tr>
                    <tr>
                        <td>c. Acceptability of output based on standard</td>
                    </tr>
                    <tr>
                        <td>d. Accomplishment of target</td>
                    </tr>
                </table>
            </td>
            <td style="padding: 0; margin: 0;">
                <table class="table text-center">
                    <tr>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>4</td>
                    </tr>
                </table>
            </td>
            <td style="padding: 0; margin: 0;">
                <table class="table text-center">
                    <tr>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>x</td>
                    </tr>
                </table>
            </td>
            <td style="padding: 0; margin: 0;">
                <table class="table text-center">
                    <tr>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>4</td>
                    </tr>
                </table>
            </td>
            <td style="padding: 0; margin: 0;">
                <table class="table text-center">
                    <tr>
                        <td>=</td>
                    </tr>
                    <tr>
                        <td>=</td>
                    </tr>
                    <tr>
                        <td>=</td>
                    </tr>
                    <tr>
                        <td>=</td>
                    </tr>
                </table>
            </td>
            <td style="padding: 0; margin: 0;">
                <table class="table text-center">
                    <tr>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>4</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>