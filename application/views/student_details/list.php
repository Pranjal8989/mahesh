<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Name: MS RAIPURIYA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- DATATABLES CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    </style>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">

    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.bootstrap5.css">
    </style>
    <!-- DATATABLES JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <!-- DATATABLES CSS -->

    <style type="text/css">
        .dt-button {
            border-radius: 10px;
            border: none;
            color: white;
            background-color: #494ca2;
            padding: 5px 10px;
        }

        input {
            border-radius: 10px;
            border: 1px solid black;
            padding: 2px 5px;

        }

        label {
            color: black;
        }

        .dt-search {
            margin-bottom: 10px;
        }

        .dt-paging-button {
            padding: 0px 15px;
            margin: 2px;
            border-radius: 10px;
            border: 1px solid black;
            font-size: 18px;
        }

        table.table.dataTable> :not(caption)>*>* {
            /* background-color: #FDF5E6; */
            text-align: center;
            font-family: sans-serif;
            /* font-size: 16px; */
        }
    </style>
</head>
<!-- JS for DataTables -->
<script type="text/javascript">
    window.onload = function exampleFunction() {
        new DataTable('#example', {
            layout: {
                top: {
                    buttons: ['copy', 'excel', 'print']
                }
            },
            pagingType: 'simple_numbers',
        });
    }
</script>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MS Raipuriya</a>


        </div>
    </nav>
    <div class="card" style=" margin: 70px 10px 10px 10px;">
        <?php echo $this->session->flashdata('message'); ?>
        <div class="card-header">
            <div class="d-flex justify-content-between ">
                Details
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                    ADD
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th> Student Name</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Class</th>
                            <th>Date of Birth</th>
                            <th>Scholar No.</th>
                            <th>Samagra Id</th>
                            <th>Aadhar</th>
                            <th>Account No</th>
                            <th>Caste</th>
                            <th>Caste Cartificate No</th>
                            <th>Mobile No</th>
                            <th>PURV KI SCHOOL</th>
                            <th>Pass out Percentage</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data as $d) {
                            ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td style="text-align:center;"><?= $d->student_name ?></td>
                                <td style="text-align:center;"><?= $d->father_name ?></td>
                                <td style="text-align:center;"><?= $d->mother_name ?></td>
                                <td style="text-align:center;"><?= $d->class ?></td>
                                <td style="text-align:center;"><?= $d->dob ?></td>
                                <td style="text-align:center;"><?= $d->scholar_no ?></td>
                                <td style="text-align:center;"><?= $d->Samagra ?></td>
                                <td style="text-align:center;"><?= $d->aadhar ?></td>
                                <td style="text-align:center;"><?= $d->account ?></td>
                                <td style="text-align:center;"><?= $d->caste ?></td>
                                <td style="text-align:center;"><?= $d->caste_no ?></td>
                                <td style="text-align:center;"><?= $d->Mobile ?></td>
                                <td style="text-align:center;"><?= $d->school ?></td>
                                <td style="text-align:center;"><?= $d->Percentage ?></td>
                                <td style="text-align:center;">
                                    <a href="#" class="btn btn-primary" onclick="edit(<?php echo $d->id ?>)"
                                        data-toggle="modal" data-target="#editcategory"> <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= base_url('student/delete/' . $d->id) ?>" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this record?')"> <i
                                            class="fas fa-trash"></i> Delete </a>

                                </td>
                            </tr><?php $i++;
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- add student -->
    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document" style="max-width: 800px; margin: 1.75rem auto;">
            <div class="modal-content">
                <?php $this->load->view('student_details/create'); ?>
            </div>
        </div>
    </div>
    <!--end add student -->
    <!-- edit student -->
    <div class="modal fade" tabindex="-1" role="dialog" id="edit">
        <div class="modal-dialog" role="document" style="max-width: 800px; margin: 1.75rem auto;">
            <div class="modal-content">
                <?php $this->load->view('student_details/edit'); ?>
            </div>
        </div>
    </div>
    <!--end edit student -->
    
    <?php $this->load->view('student_details/ajax'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>