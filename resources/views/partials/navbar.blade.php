<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="#">
            Crispy Kitchen
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.index') }}">Category</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reservation">reservation</a>
                </li>
            </ul>
        </div>

        <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0">Reserve a table</h3>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">
                            {{--
                            formmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
                            --}}
                            <form class="booking-form row" role="form" action="{{ route('reservation.store') }}"
                                method="post">
                                @csrf
                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Full Name</label>

                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="your@email.com" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="phone" class="form-label">Phone Number</label>

                                    <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                        class="form-control" placeholder="123-456-7890">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="people" class="form-label">Number of persons</label>

                                    <input type="text" name="people" id="people" class="form-control"
                                        placeholder="12 persons">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="date" class="form-label">Date</label>

                                    <input type="date" name="date" id="date" value="" class="form-control">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="time" class="form-label">Time</label>

                                    <select class="form-select form-control" name="time" id="time">
                                        <option value="5" selected>17:00 PM</option>
                                        <option value="7">18:00 PM</option>
                                        <option value="8">19:00 PM</option>
                                        <option value="9">20:00 PM</option>
                                        <option value="9">21:00 PM</option>
                                        <option value="9">22:00 PM</option>
                                        <option value="9">23:00 PM</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Special Request</label>

                                    <textarea class="form-control" rows="4" id="message" name="message"
                                        placeholder=""></textarea>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" class="form-control">Submit Request</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal-footer"></div>

                </div>

            </div>
        </div>

        <div class="d-none d-lg-block">
        </div>

    </div>
</nav>