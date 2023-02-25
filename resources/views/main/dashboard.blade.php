<x-layout>
    <div class="sidebar open">
        <div class="logo-dashboard">
            <img src="{{ asset('images/logo1.png') }}" alt="">
        </div>    
            <i class='bx bx-chevron-right arrow'></i>
        <ul class="nav-links">
            <li>
                <a href="/dashboard">
                    <i class='bx bx-home-alt'></i>
                    <span class="link-name">Home</span>
                </a>
            </li>
            <li>
                <a href="/notification">
                    <i class='bx bx-bell'></i>
                    <span class="link-name">Notification</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-star'></i>
                    <span class="link-name">Feedback</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-info-circle'></i>
                    <span class="link-name">About Us</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="header">
        <div class="user-profile">
            <img src="{{ asset('images/profile.jpg') }}" alt="">    
            <span class="profile-name">Lorem lorem</span>
            <p class="manage">Manage Profile</p>
        </div>
    </div>
    <section>
        <div class="welcome">
            <span>Welcome, </span><span>Lorem!</span>
            <div class="request-document">
                <span>Frequently Requested Documents</span>
                <div class="options-wrapper">
                    <div class="options-content">
                        <h1>Barangay Clearance</h1>
                            <div class="requirements">
                                <li>Requirements</li>
                                <li>Lorem</li>
                            </div>
                            <div class="fee">
                                <li>Fee</li>
                                <li>Php1221</li>
                            </div>
                            <button type="button" class="request-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Request Now!
                            </button>
                            <i class="fa-solid fa-horizontal-rule straight-line"></i>
                        </div>
                       <div class="certificate">
                        <h1>Certificate of Indigency</h1>
                            <div class="requirements">
                                <li>Requirements</li>
                                <li>Lorem</li>
                            </div>
                            <div class="fee">
                                <li>Fee</li>
                                <li>Php1221</li>
                            </div>
                            <button>
                                Request Now!
                            </button>
                       </div>
                    </div>
                </div>
            </div>
            <div class="request-header">
                <div class="request-content">
                    <button>
                        Request Document
                    </button>
                    <button>
                        Set Appointment
                    </button>
                    <button>
                        Pay
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content modalContent">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><span>Request a </span><span> Document</span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="back"></button>
                                </div>
                                <div class="modal-body">
                                    <select id="my-dropdown" name="my-select">
                                        <option disabled selected value="selection">Select a Document</option>
                                        <option value="barangay_clearance">Barangay Clearance</option>
                                        <option value="indigency">Certificate of Indigency</option>
                                        <option value="birth_certificate">PSA / Birth Certificate</option>
                                        <option value="marriage_certificate">Marriage Certificate</option> 
                                        <option value="death_certificate">Death Certificate</option>  
                                        <option value="business_permit">Business Permit</option>
                                        <option value="building_permit">Building Permit</option>
                                    </select>
                                    <div class="fields">
                                        <div class="input-wrapper">
                                            <input type="text" class="inputs-request" id="firstname" placeholder="Firstname">
                                            <input type="text" class="inputs-request" id="lastname" placeholder="Lastname">
                                            <input type="text" class="inputs-request" id="age" placeholder="Age">
                                            <input type="text" class="inputs-request" id="address" placeholder="Address">
                                            <input type="text" class="inputs-request" id="purpose" placeholder="Purpose">
                                        </div> 
                                    </div>  
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary requestButton" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary requestButton">Submit</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        
    </section>
</x-layout>