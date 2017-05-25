<?php
/*
 *  Template Name: Sign Up
 */

/**
 * Created by PhpStorm.
 * User: hrvojeantunovic
 * Date: 22.05.17.
 * Time: 13:37
 */

get_header();


$price_plan_slug = $_GET['plan'];
$price_plan = get_posts(array('post_type' => 'price_plans', 'name' => $price_plan_slug));
//echo json_encode($price_plan);
?>
<style>
    #header{
        height:350px;
    }
</style>
    <section id="signup_form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Signup for <strong><?php echo $price_plan[0]->post_title; ?></strong> of coaching</h1>
                    <p>Use the form below to complete your application. </p>
                    <p>Once completed, I need you to send current photos of your physique to my email, and then await
                        approval. </p>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <form class="form-vertical" id="signup_form">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6">
                                    <label for="first_name">First Name</label>
                                    <input class="form-control" placeholder="Jonathan" type="text" name="first_name"/>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="last_name">Last Name</label>
                                    <input class="form-control" placeholder="Johansson" type="text" name="last_name"/>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="email">E-mail </label>
                                    <input class="form-control" placeholder="example@gmail.com" type="email" name="email"/>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-3">
                                    <label for="sex">Sex</label>
                                    <select class="form-control" name="sex">
                                        <option value="">Select One</option>

                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="age">Age</label>
                                    <input class="form-control" value="0"  type="number" name="age"/>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="current_weight">Current Weight(kilograms)</label>
                                    <input class="form-control"  value="0" type="number" name="current_weight"/>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="height">Height(centimetres)</label>
                                    <input class="form-control"  value="0"  type="number" name="height"/>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6">
                                    <label for="current_macros">Current macros(if counting)</label>
                                    <input class="form-control" placeholder="110 Protein, 100 Carbs, etc..." type="text" name="current_macros"/>

                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="gym_history">Gym history</label>
                                    <select class="form-control" name="gym_history">
                                        <option value="">Select One</option>
                                        <option>Under 6 Months</option>
                                        <option>Over 6 Months</option>
                                        <option>1 Year</option>
                                        <option>2 Years</option>
                                        <option>3+ Years</option>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group">

                                <div class="col-xs-12 col-sm-4">
                                    <label for="goal">Goal</label>
                                    <select class="form-control" name="goal">
                                        <option value="">Select One</option>
                                        <option>Lose Weight</option>
                                        <option>Gain Muscle</option>

                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label for="gym_days">Max gym days per week</label>
                                    <input class="form-control" value="0"  type="number" name="gym_days"/>

                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label for="gym_access">Access to gym</label>
                                    <select class="form-control" name="gym_access">
                                        <option value="true">Yes</option>
                                        <option value="false">No</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="message">Other notes(medical conditions, prior conditions,
                                        etc...)</label>
                                   <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="checkbox" name="job" value="I agree with..." />
                                        <span>Back-end Developer</span>
                                    </label>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </section>
<?php
get_footer();
