@extends('layouts.frontend.app')

@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area_plane">
            <div class="container">
                <div class="banner_content">
                    <h3>What We DO</h3>
                </div>
            </div>
        </section>
        <div class="banner_link">
            <div class="container">
                <div class="b_crum_link_inner">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/service') }}">What we do</a>
                </div>
            </div>
        </div>
        <!--================End Banner Area =================-->
        
        <!--================Carrers Area =================-->
        <section class="carrers_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="service_content_right_col">
                            <div class="tab-content">
                                    <div class="service_content_bx">
                                        <p>We specialise in providing both permanent and temporary recruitment. Therefore, we are happy to work with established companies whilst also supporting start up companies. We also understand that while majority of candidates are seeking a career building profession, there are some candidates who are seeking work to fit their lifestyle, and we are here to help in both scenarios.</p>

                                        <h2>Client Services</h2>
                                        <p>Wide Nation will manage the entire recruitment process which gives you full autonomy to focus on all the performance aspects of your company. However, we keep you completely in the loop of our registration processes from registration to job securement. We understand that as a client, you will be expecting an excellent recruitment service, that can offer the most capable candidates, within an efficient and timely manner.</p>
                                        <p>Therefore, we perform an extensive recruitment process on your behalf by sourcing through; external agency/database selection, advertisement, guided interviews and assessments. When you partner with Wide Nation, you will be assigned a recruiter with expertise in your field of business who will support all your requirements.</p>

                                        <h2>CANDIDATE SERVICES </h2>
                                        <p>At Wide Nation, providing you with the most suitable employment is our main concern. We listen and guide you in everyway possible on your career search.</p>
                                        <p>We understand that each candidate may have their own career goals and needs, therefore we tailor our approach in the most suitable way possible to get the best outcomes possible.</p>
                                        <br>
                                        <p>We understand that each candidate may have their own career goals and needs, therefore we tailor our approach in the most suitable way possible to get the best outcomes possible.</p>
                                        <p>Applying for a role: we will manage the application process on your behalf, we will conduct pre-interviews if required, and help with CV submissions or adjustments where necessary. We will be on hand from the early stages of interest until a job position has been secured passed probation.</p>
                                        <br>
                                        <p>Applying for a role: we will manage the application process on your behalf, we will conduct pre-interviews if required, and help with CV submissions or adjustments where necessary. We will be on hand from the early stages of interest until a job position has been secured passed probation.</p>
                                        <br>
                                        <p>Joining our employment pool: we will thoroughly assess your profile and offer the most suitable roles which match your key strengths. This is ideal for temporary positions as we can find suitable part-time/full-time jobs within short time frames.</p>

                                        <h2>TEMPORARY RECRUITMENT </h2>
                                        <p>We provide instantaneous temporary/short term employment solutions which can span from just a few days to a few weeks.  In certain instance we can provide starting positions within a within a few days of candidates joining our employment pool. All candidates who join our employment pool are vetted, referenced and their eligibility to work within the United Kingdom will be checked.</p>
                                        <p style="color: red; font-size: 14px;">Please note that short term/temporary positons will initially be paid will be via Widenation Recruitment Ltd, until the position has been agreed to become permanent, in which the client will become the official employer.</p>
                                    </div>                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--================End Carrers Area =================-->
@endsection