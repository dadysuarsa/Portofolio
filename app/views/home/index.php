    <!-- jumbotron  -->
    <div class="jumbotron jumbotron-fluid" id="jumbotron">
        <div class="container text-center">
            <img src="../assets/img/profile1.png" width="25%" class="rounded-circle-sm">     
            <?php foreach ($data['datauser'] as $datauser) :?>  
            <p class="tag-nama"><?= ($datauser['Nama']);?></p>
            <?php endforeach ;?>
            <p class=" tag-job">Programmer | Web Developer</p>
            <a href="" class="btn btn-light"> Download Resume
            </a>
        </div>
    </div> <!-- akhir jumbotro -->
    <!-- container -->
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <a href="">
                            <img src="../assets/img/Resume.png" alt="My resume" class="float-center">
                            <h4>Resume</h4>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="">
                            <img src="../assets/img/Protofolio.png" alt="My Protofolio" class="float-center">
                            <h4>Portofolio</h4>
                        </a>
                    </div>
                    <div class="col-lg"><a href="">
                            <img src="../assets/img/Service.png" alt="Service" class="float-center">
                            <h4>Service</h4>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- info panel -->
    <!-- info panel -->
    <!-- akhir container -->
    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>about</h2>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-lg-6 text-justify">
                        <blockquote class="blockquote">
                            <p class="mb-0">Pengalaman saya yang didunia pemrograming berasal dari keinginan sederhana
                                membantu
                                seseorang agar dapat mengakses sesuatu sistem informasi menjadi lebih cepat dan akurat.
                                Dunia yang luas ini tidak akan menjadi batasan untuk setiap orang berkomunikasi dan
                                bertukar informasi, batas geografis bukan suatu halangan, begitu pula Perbedaan budaya
                                tidak akan menjadi suatu hambat. Umat manusia akan datang bersama untuk 1 tujuan
                                mengapai
                                era globaliasi dan hal Itulah yang mendorong saya agar bisa membantu masyarakat untuk
                                mencapai titik tersebut.</p>
                        </blockquote>


                    </div>
                    <div class="col-lg-6">
                        <table>
                        <?php foreach ($data['datauser'] as $datauser) :?>                           <tr>
                                <th>Age</th>
                                <td>:</td>
                                 <?php //tanggal lahir
                                        $birthDt = new DateTime($datauser['tgl_lahir']);
                                        //tanggal hari ini
                                         $today = new DateTime('today');
                                         //tahun
                                         $y = $today->diff($birthDt)->y;
                                ?>
                                <td><?= $y; ?><?= ' Tahun'; ?></td>
                            </tr>
                            <tr>
                                <th>Warga Negara</th>
                                <td>:</td>
                                <td><?= $datauser['Warganegara'];?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td><?= $datauser['Alamat'];?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td><?= $datauser['Email'];?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>:</td>
                                <td><?= $datauser['Hp'];?></td>
                            </tr>
                        <?php endforeach; ?>    
                        </table>
                        <div class="info-sosmed">
                            <table>
                                <thead>
                                    <tr>
                                         <th>
                                            <div class="col-lg">
                                                <a href="">
                                                    <img src="../assets/img/github.png" alt="My github">
                                                </a>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="col-lg">
                                                <a href="">
                                                    <img src="../assets/img/facebook.png" alt="My Facebook">
                                                </a>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="col-lg">
                                                <a href="">
                                                    <img src="../assets/img/instagram.png" alt=" My Instagram">
                                                </a>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="col-lg">
                                                <a href="">
                                                    <img src="../assets/img/linkedin.png" alt=" My Linked">
                                                </a>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="col-lg">
                                                <a href="">
                                                    <img src="../assets/img/twitter.png" alt=" My Twitter">
                                                </a></div>
                                        </th>


                                        <th>
                                            <div class="col-lg">
                                                <a href="">
                                                    <img src="../assets/img/youtube.png" alt=" My Youtube">
                                                </a>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        </div>
        </div>
        </div>

    </section>
    <!-- akhir about -->
    <!-- QOUTE -->
    <section class="qoute" id="qoute">
        <div class="container">
            <div class="col-sm-8 offset-sm-2">
                <blockquote class="blockquote-text text-center">
                <?php foreach ($data['datauser'] as $datauser) :?>  
                    <p class="mb-0">"<?= $datauser['Qoute'];?>"</p>
                    <p class="blockquote-footer"><?= $datauser['Qouteby'];?><cite title="Source Title"></cite>
                    <?php endforeach ;?>  
                </blockquote>
                </p>
            </div>

    </section>
    <!-- AKHIR QUITE -->