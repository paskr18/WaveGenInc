<?php
  echo '<div class="navbar">';
  echo '<a id = "company_overview" href = "company_overview.php"> Company Overview  </a>';
  echo '<a id = "past_research_work" href = "past_research_work.php"> Past Research Work </a>';
  echo '<a id = "collaboration" href = "collaboration.php"> WaveGen <> M2M Tech Collaboration ►</a>';
  echo '<div class="dropdown">';
  echo '<a id = "EDA"> Exploratory Data Analysis (EDA) &#9660</a>';
  echo '<div class="dropdown-content">';
  echo '<a href="EDA.php"> Phase 1 </a>';
  echo '<a href="EDA.php"> Phase 2 </a>';
  echo '</div>';
  echo '</div>';
  echo '<a id = "Nemoh" href = "nemoh.php"> Nemoh Simulations</a>';
  echo '<a id = "XGBoost" href = "XGBoost.php"> Machine Learning - XGBoost</a>';
  echo '<a id = "LightGBM" href = "LightGBM.php"> (TBD) Machine Learning - LightGBM</a>';
  echo '<a id = "assumptions_limitations" href = "assumptions_limitations.php"> Assumptions - Limitations</a>';
  echo '<a id = "recommendations" href = "recommendations.php"> Future Recommendations</a>';
  echo '</div>';
?>