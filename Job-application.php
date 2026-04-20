<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply for Job | JMD Consultancy</title>
  <!-- Bootstrap 5 + Font Awesome + Inter -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; background-color: #f9fafc; }
    .navbar { box-shadow: 0 4px 12px rgba(0,0,0,0.02); background: white; }
    .navbar-brand { font-weight: 700; font-size: 1.6rem; color: #0a2c4e !important; }
    .btn-primary { background-color: #0a2c4e; border-color: #0a2c4e; font-weight: 500; padding: 0.6rem 1.5rem; border-radius: 30px; }
    .btn-primary:hover { background-color: #1e4a76; border-color: #1e4a76; }
    .page-header { background: linear-gradient(135deg, #eef4ff 0%, #ffffff 100%); padding: 3rem 0; }
    .section-title { font-weight: 700; color: #0a2c4e; }
    .form-card { background: white; border-radius: 28px; padding: 2.2rem; box-shadow: 0 20px 35px -10px rgba(0,0,0,0.05); border: 1px solid #edf2f9; }
    .benefit-badge { background: #eef4ff; border-radius: 30px; padding: 0.3rem 1rem; font-size: 0.9rem; color: #0a2c4e; }
    .footer { background-color: #0a1c2e; color: #e0e9f2; }
    .footer a { color: #b6c9e0; text-decoration: none; }
    .footer a:hover { color: white; }
    .call-badge { background-color: #1e4a76; padding: 0.5rem 1.2rem; border-radius: 50px; color: white; font-weight: 600; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg py-3 sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.html">JMD <span style="color:#1e4a76;">Consultancy</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarApply">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarApply">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-medium">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
        <li class="nav-item"><a class="nav-link active" href="careers.html">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
      </ul>
      <div class="d-flex">
        <span class="call-badge me-3 d-none d-lg-block"><i class="fas fa-phone-alt"></i> 9654576537</span>
        <a href="job-apply.html" class="btn btn-primary rounded-pill px-4">Apply Now</a>
      </div>
    </div>
  </div>
</nav>

<!-- Header -->
<section class="page-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h1 class="display-5 fw-bold section-title">Apply for a Job</h1>
        <p class="lead mt-3" style="color:#2a4b6e;">Submit your resume and let our recruiters match you with top companies across India.</p>
        <div class="d-flex flex-wrap gap-2 mt-3">
          <span class="benefit-badge"><i class="fas fa-check-circle me-1"></i> Free Placement</span>
          <span class="benefit-badge"><i class="fas fa-check-circle me-1"></i> Verified Jobs</span>
          <span class="benefit-badge"><i class="fas fa-check-circle me-1"></i> Fast Process</span>
          <span class="benefit-badge"><i class="fas fa-check-circle me-1"></i> Pan India</span>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block">
        <img src="https://placehold.co/500x350/eef4ff/0a2c4e?text=Job+Application" class="img-fluid rounded-4" alt="Apply">
      </div>
    </div>
  </div>
</section>

<!-- Application Form -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="form-card">
          <h3 class="fw-bold mb-2">Job Application Form</h3>
          <p class="text-secondary mb-4">Fill the form below. Our HR team will contact you shortly for suitable opportunities.</p>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Full Name *</label>
                <input type="text" class="form-control" placeholder="Your name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Email Address *</label>
                <input type="email" class="form-control" placeholder="you@example.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Phone Number *</label>
                <input type="tel" class="form-control" placeholder="9876543210" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Position Applying For *</label>
                <select class="form-select" required>
                  <option selected disabled>Select</option>
                  <option>Frontend Developer</option><option>Backend Developer</option><option>Full Stack</option>
                  <option>Telecaller</option><option>Customer Support</option><option>HR Executive</option>
                  <option>Recruiter</option><option>Sales Executive</option><option>Field Sales</option>
                  <option>Marketing</option><option>Admin</option><option>Other</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Total Experience *</label>
                <input type="text" class="form-control" placeholder="e.g. 2 Years" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Preferred Job Location *</label>
                <input type="text" class="form-control" placeholder="City / Remote" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Current CTC (Optional)</label>
                <input type="text" class="form-control" placeholder="e.g. ₹3.5 LPA">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Expected CTC (Optional)</label>
                <input type="text" class="form-control" placeholder="e.g. ₹5 LPA">
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Upload Resume (PDF/DOC) *</label>
                <input class="form-control" type="file" accept=".pdf,.doc,.docx" required>
                <div class="form-text">Max 5MB</div>
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Additional Message / Cover Note</label>
                <textarea class="form-control" rows="3" placeholder="Tell us about your skills, notice period, etc."></textarea>
              </div>
              <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2">Submit Application <i class="fas fa-paper-plane ms-2"></i></button>
              </div>
            </div>
          </form>
          <p class="small text-secondary mt-3 mb-0"><i class="fas fa-info-circle me-1"></i> We never charge candidates. Your data is secure.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-4">
  <div class="container">
    <div class="bg-white rounded-4 p-4 border d-flex flex-wrap align-items-center justify-content-between">
      <div><i class="fas fa-briefcase fa-2x me-3" style="color:#0a2c4e;"></i> <span class="fw-bold">Not sure which role fits you?</span> Upload your resume and we'll find the best match.</div>
      <a href="#" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-upload me-1"></i> Quick Upload</a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer pt-5 pb-4">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-5">
        <h4 class="fw-bold text-white">JMD Consultancy</h4>
        <p class="mt-3" style="color:#b6c9e0;">Trusted HR recruitment and manpower solutions firm.</p>
        <div><i class="fas fa-phone-alt me-2"></i> 9654576537</div>
        <div><i class="fas fa-envelope me-2"></i> hr@jmdconsultancy.in</div>
      </div>
      <div class="col-md-2"><h6>Quick Links</h6><ul class="list-unstyled"><li><a href="index.html">Home</a></li><li><a href="about.html">About</a></li><li><a href="services.html">Services</a></li><li><a href="careers.html">Careers</a></li><li><a href="contact.html">Contact</a></li></ul></div>
      <div class="col-md-3"><h6>Services</h6><ul class="list-unstyled"><li><a href="#">End-to-End Hiring</a></li><li><a href="#">Bulk Hiring</a></li><li><a href="#">Payroll</a></li><li><a href="#">Pan India Recruitment</a></li></ul></div>
      <div class="col-md-2"><h6>Follow</h6><a href="#"><i class="fab fa-linkedin fa-lg me-3"></i></a><a href="#"><i class="fab fa-facebook fa-lg"></i></a></div>
    </div>
    <hr class="mt-4 mb-3" style="border-color:#2a4058;">
    <div class="row"><div class="col text-center text-md-start"><small>© 2026 JMD Consultancy. All Rights Reserved.</small></div></div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>