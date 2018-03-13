@extends('layouts.master')

@section('content')
    
    <main id="main-container">
        <div class="content">
            <h2 class="content-heading">Course Information</h2>

            <div class="row">
                <div class="col-md-12">

                    {{-- First table --}}
                    <div class="block">
                        {{-- <div class="block-header block-header-default">
                            <h3 class="block-title">EMPLOYABILITY PORTFOLIO</h3>
                        </div> --}}
                        <div class="block-content">

                            <table class="table table-striped table-vcenter table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">Course</th>
                                        <th style="width: 60%;">Element</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            Level 3 Certificate in Business Essentials.
                                        </th>
                                        
                                        <td>
                                            <ul>
                                                <li>Business Essentials.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 4 Foundation Diploma in Business Management.</th>
                                        <td>
                                            <ul>
                                                <li>Dynamic Business Environment. </li>
                                                <li>Enterprising Organisations. </li>
                                                <li>Employability and Self Development. </li>
                                                <li>Finance for Managers. </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                    {{-- Diploma table --}}
                    <div class="block mb-50">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">DIPLOMA PROGRAM</h3>
                        </div>
                        <div class="block-content">

                            <table class="table table-striped table-vcenter table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">Course</th>
                                        <th style="width: 60%;">Element</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th>Level 4 Diploma in Business Management.</th>
                                        <td>
                                            <ul>
                                                <li>Introduction to Entrepreneurship. </li>
                                                <li>Introduction to Quantitative methods. </li>
                                                <li>Project Management. </li>
                                                <li>Dynamic Collaborative Teams. </li>
                                                <li>Dynamic Business Environment. </li>
                                                <li>Enterprising Organisations. </li>
                                                <li>Employability and Self Development. </li>
                                                <li>Finance for Managers.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 4 Diploma in Business Management and Human resources.</th>
                                        <td>
                                            <ul>
                                                <li>Introduction to Entrepreneurship. </li>
                                                <li>Introduction to Quantitative Methods. </li>
                                                <li>Project Management. </li>
                                                <li>Principles of HR. </li>
                                                <li>Dynamic Business Environment. </li>
                                                <li>Enterprising Organisations. </li>
                                                <li>Employability and Self Development. </li>
                                                <li>Finance for Managers.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 4 Diploma in Business Management and Marketing.</th>
                                        <td>
                                            <ul>
                                                <li>Introduction to Entrepreneurship. </li>
                                                <li>Introduction to Quantitative Methods. </li>
                                                <li>Project Management. </li>
                                                <li>Principles of Marketing Practice. </li>
                                                <li>Dynamic Business Environment. </li>
                                                <li>Enterprising Organisations. </li>
                                                <li>Employability and Self Development. </li>
                                                <li>Finance for Managers.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 5 Diploma Business Management.</th>
                                        <td>
                                            <strong>Core module:</strong>
                                            <ul>
                                                <li>Managing Agile Organisations and People</li>
                                                <li>Innovation and Business Performance</li>
                                                <li>Effective Financial Management</li>
                                                <li>International Business Economics and Markets</li>
                                            </ul>
                                            <strong>Elective (any 2):</strong>
                                            <ul>
                                                <li>Operations Management</li>
                                                <li>Analytical Decision-making</li>
                                                <li>Managing Stakeholder Relationships</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 5 Diploma Business Management and Human Resources.</th>
                                        <td>
                                            <strong>Core module:</strong>
                                            <ul>
                                                <li>Managing Agile Organisations and People</li>
                                                <li>Innovation and Business Performance</li>
                                                <li>Effective Financial Management</li>
                                                <li>International Business Economics and Markets</li>
                                            </ul>
                                            <strong>Elective (any 2):</strong>
                                            <ul>
                                                <li>Human Resources Management</li>
                                                <li>Employee Engagement</li>
                                                <li>The HR Professional</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 5 Diploma Business Management and Marketing.</th>
                                        <td>
                                            <strong>Core module:</strong>
                                            <ul>
                                                <li>Managing Agile Organisations and People</li>
                                                <li>Innovation and Business Performance</li>
                                                <li>Effective Financial Management</li>
                                                <li>International Business Economics and Markets</li>
                                            </ul>
                                            <strong>Elective (any 2):</strong>
                                            <ul>
                                                <li>Integrated Marketing Communications</li>
                                                <li>Buyer and Consumer Behaviour</li>
                                                <li>Societal and Social Marketing</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 6 Diploma Business Management.</th>
                                        <td>
                                            <strong>Core module:</strong>
                                            <ul>
                                                <li>Leading Strategic Change</li>
                                                <li>Business Strategy and Decision-making</li>
                                                <li>Developing International Markets</li>
                                                <li>Business Ethics and Sustainability</li>
                                            </ul>
                                            <strong>Elective (any 2):</strong>
                                            <ul>
                                                <li>Strategic Stakeholder Relationship</li>
                                                <li>Corporate Finance</li>
                                                <li>Advanced Project Management</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 6 Diploma Business Management and Human Resources.</th>
                                        <td>
                                            <strong>Core module:</strong>
                                            <ul>
                                                <li>Leading Strategic Change</li>
                                                <li>Business Strategy and Decision-making</li>
                                                <li>Developing International Markets</li>
                                                <li>Business Ethics and Sustainability</li>
                                            </ul>
                                            <strong>Elective (any 2):</strong>
                                            <ul>
                                                <li>Strategic HRM</li>
                                                <li>Organisational Design, Development and Performance</li>
                                                <li>Contemporary Developments in Global HRM</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Level 6 Diploma Business Management and Marketing.</th>
                                        <td>
                                            <strong>Core module:</strong>
                                            <ul>
                                                <li>Leading Strategic Change</li>
                                                <li>Business Strategy and Decision-making</li>
                                                <li>Developing International Markets</li>
                                                <li>Business Ethics and Sustainability</li>
                                            </ul>
                                            <strong>Elective (any 2):</strong>
                                            <ul>
                                                <li>Strategic Marketing</li>
                                                <li>Strategic Marketing Relationships</li>
                                                <li>Digital Marketing Strategy</li>
                                            </ul>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            
                        </div>
                    </div>


                    {{-- Table 2 --}}
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">ENTREPRENEURSHIP PORTFOLIO</h3>
                        </div>
                        <div class="block-content">

                            <table class="table table-striped table-vcenter table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">Course</th>
                                        <th style="width: 60%;">Element</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            Award in Setting up your own Business.
                                        </th>
                                        
                                        <td>
                                            <ul>
                                                <li>Self-employment as a career choice</li>
                                                <li>The business proposition</li>
                                                <li>Personal survival as a sole trader</li>
                                                <li>Business Finance and record Keeping</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Certificate in Business Start-up</th>
                                        <td>
                                            <ul>
                                                <li>Analyse entrepreneurial and market potential</li>
                                                <li>Build the business idea</li>
                                                <li>Plan the marketing approach</li>
                                                <li>Plan the operations</li>
                                                <li>Plan the budget</li>
                                                <li>Create the business plan and pitch</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Award in Digital Marketing Essentials for Small Businesses.</th>
                                        <td>
                                            <ul>
                                                <li>Introduction to the digital world for small businesses</li>
                                                <li>How to create the infrastructure for successful SMEs</li>
                                                <li>Using digital and online tools to communicate and generate revenues</li>
                                                <li>How to develop and maintain an online presence</li>
                                                <li>Creating a digital marketing plan for a small business</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>

                    {{-- Table 3 --}}
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">EMPLOYABILITY PORTFOLIO</h3>
                        </div>
                        <div class="block-content">

                            <table class="table table-striped table-vcenter table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">Course</th>
                                        <th style="width: 60%;">Element</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            Awards in Employability Skills: Making the Move to Work.
                                        </th>
                                        
                                        <td>
                                            <ul>
                                                <li>What employers are looking for in prospective employees</li>
                                                <li>What I have to offer</li>
                                                <li>Presenting what I have to offer</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </main>
@endsection
