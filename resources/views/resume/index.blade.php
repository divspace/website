@extends('layouts.master')
@section('content')
    <div id="resume">
        <h1 class="resume-title">Kyle Anderson</h1>
        <ul class="resume-contact">
            <li>Scottsdale, AZ</li>
            <li>(480) 434-4675</li>
            <li>kyle@divspace.com</li>
            <li>linkedin.com/in/divspace</li>
        </ul>
        <h2 class="resume-occupation">Web Developer &amp; Programmer</h2>
        <table class="resume-core-skills">
            <tr>
                <td>PHP / HTML / CSS</td>
                <td>Laravel / jQuery / Bootstrap</td>
                <td>Systems Administration</td>
                <td>Technology Management</td>
            </tr>
        </table>
        <div class="resume-short-description">
            <p>
                Versatile and efficiency focused front- / back-end developer and programmer.
            </p>
            <p>
                Dedicated to building quality, high performance digital experiences, with a passion for translating complex requirements into elegant, functional code.
            </p>
        </div>
        <div class="resume-long-description">
            <p>
                Leverage technical expertise and creativity to innovate web properties that <strong>simplify complexity and enhance user experiences</strong>.
            </p>
            <p>
                <strong>Thrive in both highly autonomous roles and collaborative team environments</strong> that are conducive to iteration and idea sharing.
            </p>
            <p>
                Design and architect websites and web applications with a focus on user experiences and <strong>making information easier to grasp</strong>.
            </p>
        </div>
        <h3 class="resume-section">Professional Experience</h3>
        <div class="resume-job">
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 resume-job-position">
                    <strong>Application Developer</strong> &mdash; Media Solutions &mdash; Chandler, AZ
                </div>
                <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 resume-job-duration">
                    <em>2015 &mdash; Present</em>
                </div>
            </div>
            <ul>
                <li>Easily jumped into existing Laravel 4 and Laravel 5 projects and provided new ways to increase productivity by introducing Gulp for task automation, Bower for managing JavaScript and CSS libraries, and Sass for improved readability and organization for CSS.</li>
                <li>Removed repetitive code and template variables with the DRY principle by creating repositories, transformers, presenters, and view composers.</li>
                <li>Developed a program to automatically find missing product images and convert them web-friendly graphics for client websites.</li>
            </ul>
        </div>
        <div class="resume-job">
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 resume-job-position">
                    <strong>Chief Technology Officer</strong> &mdash; Smart Source Hosting &mdash; New York, NY
                </div>
                <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 resume-job-duration">
                    <em>2014 &mdash; 2015</em>
                </div>
            </div>
            <ul>
                <li>Designed and built out Smart Source Hosting's entire technical infrastructure, including setting up Amazon Web Services (AWS) cloud hosting, implementing server hardening and security, identifying billing / payment processing solutions, and developing the site.</li>
                <li>Established Smart Source Hosting's social media presence and a high-ROI digital marketing strategy, including PPC, SEM, SMM, SEO, and email campaigns that achieved a 28% open rate.</li>
            </ul>
        </div>
        <div class="resume-job">
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 resume-job-position">
                    <strong>Co-Founder</strong> &mdash; Crucial Web Hosting &mdash; Phoenix, AZ
                </div>
                <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 resume-job-duration">
                    <em>2006 &mdash; 2014</em>
                </div>
            </div>
            <ul>
                <li>Established and manage all aspects of the hosting businesses, from infrastructure development and maintenance to customer acquisition, web design and development, billing, and support.</li>
                <li>Grew Crucial Web Hosting into $1MM+ in annual revenues through targeted marketing, consistent infrastructure modernization, and by providing outstanding user experiences.</li>
                <li>Wrote blog and knowledge base articles to help clients and increase Crucial Web Hosting's online presence. Created content that earned prominent placement in industry publications, such as <em>Smashing Magazine</em> and <em>A List Apart</em>.</li>
                <li>Introduced Magento and established Crucial Web Hosting as the industry's most prominent hosting provider for the emerging ecommerce solution. Served as a technical product expert, which earned Crucial Web Hosting placement on Magento's wiki and differentiated the company.</li>
            </ul>
        </div>
        <div class="resume-job">
            <div class="row">
                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 resume-job-position">
                    <strong>IT Director</strong> &mdash; B&amp;D Litho &mdash; Phoenix, AZ
                </div>
                <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 resume-job-duration">
                    <em>2001 &mdash; 2002</em>
                </div>
            </div>
            <ul>
                <li>Managed all aspects of the company's technical infrastructure, including installing, updating, and administering hardware, systems software, applications software, and configurations. Constantly evaluated system to identify and address opportunities to improve reliability, availability, and security. Served as a technical support resource for end-users.</li>
                <li>Developed B&amp;D Litho's online presence and introduced user-friendly technical enhancements to streamline the media submittal process and increase efficiency in the Graphic Design department.</li>
            </ul>
        </div>
        <h3 class="resume-section">Select Technical Expertise</h3>
        <div class="resume-skills">
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Markup Languages</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">HTML, Jade, YAML</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Stylesheet Languages</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">CSS, Sass, SCSS, Stylus</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Programming Languages</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">Bash, CoffeeScript, JavaScript, Perl, PHP, SQL</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Web Application Frameworks</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">CodeIgniter, Laravel, Slim, Symfony, Yii, Zend Framework</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Front-End Frameworks</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">Bootstrap, Font Awesome, Foundation</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">JavaScript Libraries</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">jQuery, jQuery UI</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">JavaScript Frameworks</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">AngularJS, Express.js, Node.js, Sails, Socket.IO</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Content Management Systems</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">Drupal, ExpressionEngine, Ghost, Joomla, Magento, WordPress</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Package Managers</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">Bower, Composer, CPAN, npm, PEAR</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Data Storage</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">MariaDB, Memcached, MongoDB, MySQL, Percona Server, Redis</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Solution Stacks</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">LAMP, LEMP, MEAN</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Version Control</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">Git, Subversion</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Development Methods</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">Kanban, Scrumban</div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 resume-skill-section">Development Tools</div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 resume-skill-items">EditorConfig, Gulp, Homestead, Sublime, Vim, VirtualBox</div>
            </div>
        </div>
    </div>
@stop
