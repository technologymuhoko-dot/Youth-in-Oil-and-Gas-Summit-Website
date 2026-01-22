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

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <h5 class="alert-heading">Please fix the following errors:</h5>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('attendee.store') }}" method="post" target="_top">
                                <!-- contact form box -->

                                @csrf
                                <div class="contact-form-box">
                                    <!-- form title -->
                                    <div class="forms-title up">
                                        <h1>Details of You</h1>
                                    </div>
                                    <div class="row">

                                        <x-form-input name="first_name" label="First Name" placeholder="First Name"
                                            value="{{ $attendee->first_name }}" required />

                                        <x-form-input name="last_name" label="Last Name"
                                            value="{{ $attendee->last_name }}" placeholder="Last Name" required />

                                        <x-form-select label="Title" name="title" :options="['Mr', 'Sir', 'Ms', 'Mrs', 'Dr', 'Prof']"
                                            :selected="$attendee->title" />

                                        <x-form-select label="Gender" name="gender" :options="['Male', 'Female', 'Other']"
                                            :selected="$attendee->gender" />

                                        <x-form-input type="email" name="email" label="Email" placeholder="Email"
                                            value="{{ $attendee->email }}" required />

                                        <x-form-input name="contact_number" label="Contact Number"
                                            value="{{ $attendee->contact_number }}" placeholder="Contact Number"
                                            required />

                                        <x-form-input type="date" name="date_of_birth" label="Date of Birth"
                                            :value="optional($attendee->date_of_birth)->format('Y-m-d') ??
                                                $attendee->date_of_birth" placeholder="Date of Birth" required />

                                        <x-form-input name="id_passport" label="ID | Passport"
                                            value="{{ $attendee->id_passport }}" placeholder="ID | Passport" required />

                                        <x-form-select label="Package" name="package" :options="[
                                            'Continental Delegation',
                                            'Patriot Delegation',
                                            'Raising Star Pass',
                                        ]" />

                                        <x-form-input name="occupation" label="Occupation" placeholder="Occupation"
                                            value="{{ $attendee->occupation }}" required />

                                        <x-form-input name="company" label="Company" placeholder="Company" required
                                            value="{{ $attendee->company }}" />

                                        <x-form-input name="industry" label="Industry" placeholder="Industry"
                                            value="{{ $attendee->industry }}" required />

                                        <x-form-input name="citizenship" label="Citizenship" placeholder="Citizenship"
                                            value="{{ $attendee->citizenship }}" required />

                                        <x-form-input name="region" label="Region" placeholder="Region" required
                                            value="{{ $attendee->region }}" />

                                        <x-form-input name="disability" label="Disability" placeholder="Disability"
                                            value="{{ $attendee->disability }}" required />


                                    </div>
                                </div>

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
