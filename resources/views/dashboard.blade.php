@extends('layout')

@section('content')
<body>
<div class="page_content">
    <p class="pro">Progress: <progress value="1" , max="100"></progress></p>
    <table>
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="3">1.</td>
            <td>Programe and Carrier Orientation</td>
            <td>2.5</td>
            <td>Assesment</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written Exam</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case Study</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td rowspan="2">2.</td>
            <td rowspan="2">Object Orientated Programing</td>
            <td rowspan="2">10</td>
            <td>Case study</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Project</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td rowspan="4">3.</td>
            <td>Framework Development 1</td>
            <td>5</td>
            <td>Case Study</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td rowspan="3">Framework Project 1</td>
            <td rowspan="3">7.5</td>
            <td>Project</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Assesment</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Report</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td rowspan="3">4. </td>
            <td rowspan="3">Framework Project 2</td>
            <td rowspan="3">10</td>
            <td>Portfolio</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Project</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Assessment</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>The Entire Year</td>
            <td>Personal Professional Development</td>
            <td>12.5</td>
            <td>Portfolio</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Whenever</td>
            <td>Personality 1</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
        </tr>
        <tr>
            <td>Whenever</td>
            <td>Personality 2</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td class='tdinput'><input type="text" placeholder="Grade" /></td>
            </form>
        </tr>
    </table>
</div>
</body>
@endsection
