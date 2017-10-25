<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Q&A</h1>
    <form>
        <div class="card">
            <div class="form-group">
                <div class="card-header">
                    <h5 class="text-center"> json</h5>
                </div>
                <label>
                    <textarea typeof=" text" name="array1" cols="40" wrap="hard">[{
                    "foo": "bar",
                    "nest": {
                        "a": "b",
                        "z": "q"
                    },
                        "list": ["a"]
                    }]</textarea>
                </label>
                <label>
                    <textarea typeof="text" name="array2" cols="40" wrap="hard">[{
                    "baz": "boo",
                    "nest": {
                        "a": "b"
                    },
                        "list": ["n"]
                    }]</textarea>
                </label>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <?php
        if (isset($_GET["array1"]) || isset($_GET["array2"])) {
            $text1 = json_decode($_GET["array1"], true);
            $text2 = json_decode($_GET["array2"], true);
            $Cards = [
                ['header' => 'array_merge',
                    'informatie' => 'It merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one.',
                    'block' => array_merge($text1, $text2)],
                ['header' => 'array_merge_recursive',
                    'informatie' => 'merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one. It returns the resulting array.',
                    'block' => array_merge_recursive($text1, $text2)],
                ['header' => 'array_replace',
                    'informatie' => 'is not recursive : it will replace values in the first array by whatever type is in the second array.',

                    'block' => array_replace($text1, $text2)],
                ['header' => 'array_replace_recursive',
                    'informatie' => 'is recursive : it will recurse into arrays and apply the same process to the inner value.',
                    'block' => array_replace_recursive($text1, $text2)]
            ];
            foreach ($Cards as $key => $card) {
                ?>
                <div class="col-md-6" style="margin-bottom: 30px">

                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <?php echo $card['header']; ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bd-<?php echo $key; ?>-modal-sm">?
                            </button>
                            <div class="modal fade bd-<?php echo $key; ?>-modal-sm" tabindex="-1"
                                 role="dialog"
                                 aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="mySmallModalLabel"><?php echo $card['header']; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo $card['informatie']; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-block">
                            <?php
                            echo "<pre>";
                            echo json_encode($card ['block'],JSON_PRETTY_PRINT);

                            echo "</pre>";
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
</body>
</html>







