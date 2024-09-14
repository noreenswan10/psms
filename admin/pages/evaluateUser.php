<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Step Form with Progress Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .step-indicator {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #e9ecef;
            color: #000;
            border-radius: 50%;
            text-align: center;
            font-weight: bold;
        }

        .step-indicator.active {
            background-color: #007bff;
            color: #fff;
        }

        .progress-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .progress-bar-container {
            flex: 1;
            margin: 0 10px;
        }

        .progress-bar {
            height: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            width: 100%;
        }

        .progress-bar.active {
            background-color: #007bff;
        }

        /* Center text horizontally and vertically in all cells */
        table td,
        table th {
            text-align: center;
            vertical-align: middle;
        }

        /* Exclude the first td in the thead from centering */
        thead td:first-child,
        thead th:first-child {
            text-align: left;
            /* or any other alignment */
            /* vertical-align: top; */
            /* or any other alignment */
        }
        tbody td:first-child,
        tbody th:first-child {
            text-align: left;
            /* or any other alignment */
            vertical-align: top;
            /* or any other alignment */
        }


    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="mb-5">
            <button type="button" class="btn btn-default mt-3" onclick="goBack()">Back</button>
        </div>

        <!-- Progress Indicator -->
        <div class="progress-container mb-4">
            <span class="step-indicator active" id="step1-indicator">1</span>
            <div class="progress-bar-container">
                <div class="progress-bar" id="progress-bar-1"></div>
            </div>
            <span class="step-indicator" id="step2-indicator">2</span>
            <div class="progress-bar-container">
                <div class="progress-bar" id="progress-bar-2"></div>
            </div>
            <span class="step-indicator" id="step3-indicator">3</span>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="stepForm">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Step 1 -->
                        <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step1-tab">
                            <div class="mb-3">
                                <label for="firstName" class="form-label"><strong>
                                        <h3>Dimensions</h3>
                                    </strong>Output(25 points)</label>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <td>Performance Indications</td>
                                        <td class="text-center align-middle">Point Allocation</td>
                                        <td></td>
                                        <td class="text-center align-middle">Numerical Rating</td>
                                        <td></td>
                                        <td class="text-center align-middle">Weighted Score</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>a. Quality of Work</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>b. Timeliness of Work</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>c. Acceptability of output base on standard</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>d. Accomplishment of target</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
                        </div>
                        <!-- Step 2 -->
                        <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
                            <div class="mb-3">
                                <label for="firstName" class="form-label"><strong>
                                        <h3>Dimensions</h3>Job Knowledge(25 points)
                                    </strong></label>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <td>Performance Indications</td>
                                        <td>Point Allocation</td>
                                        <td></td>
                                        <td>Numerical Rating</td>
                                        <td></td>
                                        <td>Weighted Score</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>a. Understanding of the job description</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>b. Awareness of the vision, mission and objectives of the organization</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>c. Community Oriented Policing System</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>d. Creativity / Resourcefulness</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>e. Analytical Ability</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>f. Ability to solve problems/troubleshooting</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>g. Oral and written communication</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>h. Law Enforcement & Maintenance of Law/Order</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <label for="firstName" class="form-label"><strong>Work Management(15 points)</strong></label>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <td>Performance Indications</td>
                                        <td>Point Allocation</td>
                                        <td></td>
                                        <td>Numerical Rating</td>
                                        <td></td>
                                        <td>Weighted Score</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>a. Records Management & Submission of Reports</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>b. Compliance with & Implementation of Policies</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>c. Sense of Priority</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>d. Client Satisfaction / Orientation</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>e. Cost effectiveness</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>f. Involvement / Presence in Activities</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <label for="firstName" class="form-label"><strong>Interpersonal Relationship(15 points)</strong></label>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <td>Performance Indications</td>
                                        <td>Point Allocation</td>
                                        <td></td>
                                        <td>Numerical Rating</td>
                                        <td></td>
                                        <td>Weighted Score</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>a. Receptive to ideas/suggestions</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>b. Teamwork Management</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>c. Build Linkages and networks</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>d. Ability to lead and follow</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>e. Motivation</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <label for="firstName" class="form-label"><strong>Concern for the Organization(10 points)</strong></label>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <td>Performance Indications</td>
                                        <td>Point Allocation</td>
                                        <td></td>
                                        <td>Numerical Rating</td>
                                        <td></td>
                                        <td>Weighted Score</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>a. Stewardship of unit's properties</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>b. Preservation of unit interest</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>c. Coordination</td>
                                            <td>7.0</td>
                                            <td>x</td>
                                            <td>4</td>
                                            <td>=</td>
                                            <td>28</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="prevStep(1)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
                        </div>
                        <!-- Step 3 -->
                        <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="step3-tab">
                            <div class="mb-3">
                                <label for="firstName" class="form-label"><strong>
                                        <h3>Dimension</h3>Personal Qualities(10 points)
                                    </strong></label>
                                <table class="table table-bordered" class="text-center align-middle">
                                    <thead>
                                        <td colspan="4">Performance Indications</td>
                                        <td>Point Allocation</td>
                                        <td></td>
                                        <td>Numerical Rating</td>
                                        <td></td>
                                        <td>Weighted Score</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Personal Trait</td>
                                            <td>x</td>
                                            <td>Personal Trait</td>
                                            <td>x</td>
                                            <td rowspan="6" class="text-center align-middle">10</td>
                                            <td rowspan="6" class="text-center align-middle">x</td>
                                            <td rowspan="6" class="text-center align-middle">5</td>
                                            <td rowspan="6" class="text-center align-middle">=</td>
                                            <td rowspan="6" class="text-center align-middle">50</td>
                                        </tr>
                                        <tr>
                                            <td>Morally Upright</td>
                                            <td>x</td>
                                            <td>Civic-Minded</td>
                                            <td>x</td>
                                        </tr>
                                        <tr>
                                            <td>Honest</td>
                                            <td>x</td>
                                            <td>Responsible</td>
                                            <td>x</td>
                                        </tr>
                                        <tr>
                                            <td>Well-groomed</td>
                                            <td>x</td>
                                            <td>Discipline</td>
                                            <td>x</td>
                                        </tr>
                                        <tr>
                                            <td>Fair and Just</td>
                                            <td>x</td>
                                            <td>Courteous/tactful</td>
                                            <td>x</td>
                                        </tr>
                                        <tr>
                                            <td>Loyal to the organization</td>
                                            <td>x</td>
                                            <td>Initiates Positive Action</td>
                                            <td>x</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="printForm()">Print</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function nextStep(step) {
            // Hide current step
            const currentStep = document.querySelector('.tab-pane.show.active');
            currentStep.classList.remove('show', 'active');

            // Show next step
            const nextStep = document.querySelector(`#step${step}`);
            nextStep.classList.add('show', 'active');

            // Update step indicators and progress bars
            updateProgress(step);
        }

        function prevStep(step) {
            // Hide current step
            const currentStep = document.querySelector('.tab-pane.show.active');
            currentStep.classList.remove('show', 'active');

            // Show previous step
            const prevStep = document.querySelector(`#step${step}`);
            prevStep.classList.add('show', 'active');

            // Update step indicators and progress bars
            updateProgress(step);
        }

        function updateProgress(step) {
            // Reset all indicators and progress bars
            document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
                indicator.classList.remove('active');
            });

            document.querySelectorAll('.progress-bar').forEach((progressBar, index) => {
                progressBar.classList.remove('active');
            });

            // Set the current step as active
            document.querySelector(`#step${step}-indicator`).classList.add('active');

            // Fill progress bar based on current step
            for (let i = 1; i < step; i++) {
                document.querySelector(`#progress-bar-${i}`).classList.add('active');
            }
        }

        function goBack() {
            window.history.back(); // Navigate to the previous page
        }

        document.getElementById('stepForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form submitted successfully!');
        });
    </script>


    <script>
                function showPreview() {
            var previewContent = document.getElementById('previewContent');
            previewContent.innerHTML = `
                <h3>Step 1: Dimensions</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Performance Indications</th>
                            <th>Point Allocation</th>
                            <th>Numerical Rating</th>
                            <th>Weighted Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a. Quality of Work</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>b. Timeliness of Work</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>c. Acceptability of output base on standard</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>d. Accomplishment of target</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                    </tbody>
                </table>
                <h3>Step 2: Job Knowledge</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Performance Indications</th>
                            <th>Point Allocation</th>
                            <th>Numerical Rating</th>
                            <th>Weighted Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a. Understanding of the job description</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>b. Awareness of the vision, mission and objectives of the organization</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>c. Community Oriented Policing System</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>d. Creativity / Resourcefulness</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>e. Analytical Ability</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>f. Ability to solve problems/troubleshooting</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>g. Oral and written communication</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>h. Law Enforcement & Maintenance of Law/Order</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                    </tbody>
                </table>
                <h3>Step 3: Job Attitude</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Performance Indications</th>
                            <th>Point Allocation</th>
                            <th>Numerical Rating</th>
                            <th>Weighted Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a. Attendance and Punctuality</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>b. Dependability</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>c. Initiative / Self-Starter</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>d. Teamwork / Cooperation</td>
                            <td>7.0</td>
                            <td>4</td>
                            <td>28</td>
                        </tr>
                    </tbody>
                </table>
            `;
            var previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
            previewModal.show();
        }

        function printForm() {
            window.print();
        }
    </script>

</body>

</html>