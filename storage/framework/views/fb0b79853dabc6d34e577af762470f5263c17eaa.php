<?php $__env->startSection('style_css'); ?>

<style>
    .section {
        margin-top: 1rem !important;
    }

    .card-profil {
        margin-bottom: 15px !important;
    }

    .nav-home {
        width: 14rem !important;
    }

    .alert-success {
        width: 100% !important;
    }

    .photo-profil {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-left: 1rem !important;
    }

    /* Table */
    .table-mapel th {
        color: white !important;
    }

    /* Calendar */
    #myEvent {
        font-size: 0.5rem !important;
    }

    #myEvent .fc-left {
        display: none !important;
    }

    #myEvent .fc-right {
        display: none !important;
    }

    .card-calendar {
        word-wrap: unset !important;
    }

    .bg-primary {
        color: white;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-md-3">

                    <?php echo $__env->make('template.dashboardTemplate.siswa.sidebar_profil_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="card">
                        <div class="card-body">
                            <div class="header text-center">
                                <h5>Menu</h5>
                            </div>

                            <hr>

                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item nav-home">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Kelas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <div class="card">

                        <div class="card-body">

                            <!-- Session -->
                            <!-- <?php if($message = Session::get('success')): ?>

                            <div class="alert alert-success">
                                <p><?php echo e($message); ?></p>
                            </div>

                            <?php endif; ?> -->
                            <!-- End Session -->

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">

                                        <div class="card chat-form mb-3">
                                            <form id="chat-form2">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="Type a message">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="btn btn-primary">
                                                            <i class="far fa-paper-plane"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="card chat-box" id="mychatbox2">
                                            <div class="card-body chat-content">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">

                                        <div class="card-header">
                                            <h4>Kelas</h4>
                                        </div>
                                        <div class="card-body">

                                            <!-- Table -->
                                            <div class="table-responsive text-center">
                                                <table class="table table-striped table-md table-mapel">
                                                    <thead class="bg-primary">
                                                        <tr>
                                                            <th>Mata pelajaran</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>

                                                        <td><?php echo e($data->nama_mapel); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('mapelSiswa', $data->id)); ?>"> <span class="badge badge-info bg-btn bg-primary">Lihat Materi</span></a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </table>
                                            </div>
                                            <!-- End Table -->

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-12">

                            <!-- Calendar -->
                            <div class="card card-calendar">
                                <div class="card-body">
                                    <div class="fc-overflow">
                                        <div id="myEvent"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Calendar -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- <div id='messagesDiv'></div>

<form id="formInput">
    <input type='text' id='nameInput' placeholder='Name' value="<?php echo e($siswa->nama_depan); ?>">
    <input type='text' id='messageInput' placeholder='Message' value="">
    <button type="submit">Submit</button>
</form> -->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
 https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-database.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDCfAUwNxB4ejiPkr5aOrTXMT9d4FbNC2o",
        authDomain: "elearning-c74ce.firebaseapp.com",
        databaseURL: "https://elearning-c74ce.firebaseio.com",
        projectId: "elearning-c74ce",
        storageBucket: "elearning-c74ce.appspot.com",
        messagingSenderId: "760990298699",
        appId: "1:760990298699:web:7aa2306f269683b3ac53ce",
        measurementId: "G-WYHWPNJXTZ"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    var preference = firebase.database().ref("chat");

    // input ke firebase
    var submit = function() {
        var name = $("#nameInput").val();
        var message = $("#messageInput").val();

        preference.push({
            "name": name,
            "message": message
        });
    };

    $(window).load(function() {
        $("#formInput").submit(submit);
    });

    preference.on('child_added', function(data, prevChildKey) {
        var message = data.val();
        var output = document.getElementById("messagesDiv");
        var nama = message.name;
        var pesan = message.message;
        displayChatMessage(nama, pesan)
    });

    // Fungsi Tampil
    function displayChatMessage(name, text) {
        $('<div/>').text(text).prepend($('<em/>').text(name + ': ')).appendTo($('#messagesDiv'));
        $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
    };
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.dashboardTemplate.siswa.App', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/siswa/IndexSiswa.blade.php ENDPATH**/ ?>