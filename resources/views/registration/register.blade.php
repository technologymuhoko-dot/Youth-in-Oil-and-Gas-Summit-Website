<x-layout title="Register">
    <!--==================================================-->
    <!-- Strat Echofy Donation Details Area-->
    <!--==================================================-->
    <div class="donation-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">

                            <form action="{{ route('register.store') }}" method="post" target="_top">

                                @csrf

                                <!-- contact form box -->
                                <div class="contact-form-box">
                                    <!-- form title -->
                                    <div class="forms-title up">
                                        <h1>Details of You</h1>
                                    </div>
                                    <div class="row">

                                        <x-form-input name="first_name" label="First Name" placeholder="First Name"
                                            required />

                                        <x-form-input name="last_name" label="Last Name" placeholder="Last Name"
                                            required />

                                        <x-form-select label="Title" name="title" :options="['Mr', 'Sir', 'Ms', 'Mrs', 'Dr', 'Prof']" />

                                        <x-form-input type="email" name="email" label="Email" placeholder="Email"
                                            required />

                                        <x-form-select label="Gender" name="gender" :options="['Male', 'Female', 'Other']" />


                                        <x-form-select label="Participation Type" name="participation_type"
                                            :options="['Attendee', 'Sponsor', 'Exhibitor']" />


                                    </div>
                                </div>

                                {{--
                                <div class='check-content'>
                                    <h5>Select Payment Method</h5>
                                    <div class="dpx">
                                        <label>
                                            <input type="radio" class="option-input radio" name="example" checked />
                                            Paypal
                                        </label>
                                        <label>
                                            <input type="radio" class="option-input radio" name="example" />
                                            Offline Donation
                                        </label>
                                    </div>
                                </div>
                                <!--account-details-here-->
                                <input type="hidden" name="cmd" value="_donations">
                                <input type="hidden" name="business" value="example@gmail.com">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="amount">
                                <input type="hidden" name="no_note" value="0">
                                <input type="hidden" name="cn" value="Add special instructions to the seller:">
                                <input type="hidden" name="no_shipping" value="2">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="bn"
                                    value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
                            --}}
                                <button type="submit" class="submit-donation">Next</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Echofy Donation Details Area-->
    <!--==================================================-->

</x-layout>
