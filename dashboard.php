<?php 
$pageTitle = "Dashboard - FlowSync";
$currentPage = "dashboard";
include 'includes/header.php'; 
?>

<main class="dashboard-page">
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="dashboard-sidebar">
            <div class="sidebar-section">
                <div class="sidebar-header">
                    <h3>Workspaces</h3>
                    <button class="icon-btn" title="Add workspace">+</button>
                </div>
                <div class="workspace-list">
                    <div class="workspace-item active">
                        <div class="workspace-icon">🚀</div>
                        <span>Product Team</span>
                    </div>
                    <div class="workspace-item">
                        <div class="workspace-icon">💼</div>
                        <span>Marketing</span>
                    </div>
                    <div class="workspace-item">
                        <div class="workspace-icon">🎨</div>
                        <span>Design</span>
                    </div>
                </div>
            </div>

            <div class="sidebar-section">
                <div class="sidebar-header">
                    <h3>Projects</h3>
                    <button class="icon-btn" title="Add project">+</button>
                </div>
                <div class="project-list">
                    <a href="#" class="project-item active">
                        <div class="project-color" style="background: #6366f1;"></div>
                        <span>Website Redesign</span>
                        <span class="project-count">12</span>
                    </a>
                    <a href="#" class="project-item">
                        <div class="project-color" style="background: #ec4899;"></div>
                        <span>Mobile App</span>
                        <span class="project-count">8</span>
                    </a>
                    <a href="#" class="project-item">
                        <div class="project-color" style="background: #10b981;"></div>
                        <span>Q1 Campaign</span>
                        <span class="project-count">15</span>
                    </a>
                    <a href="#" class="project-item">
                        <div class="project-color" style="background: #f59e0b;"></div>
                        <span>Documentation</span>
                        <span class="project-count">6</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="dashboard-main">
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <div class="header-left">
                    <h1>Website Redesign</h1>
                    <div class="breadcrumb">
                        <span>Product Team</span>
                        <span>/</span>
                        <span>Website Redesign</span>
                    </div>
                </div>
                <div class="header-actions">
                    <button class="btn-secondary">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8 3V13M3 8H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Add Task
                    </button>
                    <button class="btn-primary">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14 2L6 10L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Share
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon" style="background: #eff6ff; color: #3b82f6;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Total Tasks</div>
                        <div class="stat-value">32</div>
                        <div class="stat-change positive">+4 this week</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: #f0fdf4; color: #22c55e;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Completed</div>
                        <div class="stat-value">18</div>
                        <div class="stat-change positive">56% completion</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: #fef3c7; color: #f59e0b;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 8V12L15 15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">In Progress</div>
                        <div class="stat-value">10</div>
                        <div class="stat-change">4 due today</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: #fce7f3; color: #ec4899;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Team Members</div>
                        <div class="stat-value">8</div>
                        <div class="stat-change positive">2 active now</div>
                    </div>
                </div>
            </div>

            <!-- Task Board -->
            <div class="task-board">
                <div class="board-header">
                    <h2>Task Board</h2>
                    <div class="board-filters">
                        <select class="filter-select">
                            <option>All Members</option>
                            <option>Assigned to me</option>
                        </select>
                        <select class="filter-select">
                            <option>All Status</option>
                            <option>In Progress</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div>

                <div class="board-columns">
                    <!-- To Do Column -->
                    <div class="board-column">
                        <div class="column-header">
                            <h3>To Do</h3>
                            <span class="task-count">4</span>
                        </div>
                        <div class="column-tasks">
                            <div class="task-card">
                                <div class="task-priority high"></div>
                                <div class="task-content">
                                    <h4>Update homepage hero section</h4>
                                    <p>Implement new design with animations</p>
                                    <div class="task-meta">
                                        <div class="task-labels">
                                            <span class="label" style="background: #dbeafe; color: #1e40af;">Design</span>
                                        </div>
                                        <div class="task-assignee">
                                            <div class="avatar" style="background: #f472b6;">SK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="task-card">
                                <div class="task-priority medium"></div>
                                <div class="task-content">
                                    <h4>Create product comparison table</h4>
                                    <p>Add interactive features comparison</p>
                                    <div class="task-meta">
                                        <div class="task-labels">
                                            <span class="label" style="background: #fef3c7; color: #92400e;">Content</span>
                                        </div>
                                        <div class="task-assignee">
                                            <div class="avatar" style="background: #60a5fa;">MJ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- In Progress Column -->
                    <div class="board-column">
                        <div class="column-header">
                            <h3>In Progress</h3>
                            <span class="task-count">3</span>
                        </div>
                        <div class="column-tasks">
                            <div class="task-card">
                                <div class="task-priority high"></div>
                                <div class="task-content">
                                    <h4>Mobile responsive optimization</h4>
                                    <p>Test and fix responsive issues</p>
                                    <div class="task-meta">
                                        <div class="task-labels">
                                            <span class="label" style="background: #dcfce7; color: #166534;">Development</span>
                                        </div>
                                        <div class="task-assignee">
                                            <div class="avatar" style="background: #34d399;">AL</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="task-card">
                                <div class="task-priority low"></div>
                                <div class="task-content">
                                    <h4>SEO meta tags update</h4>
                                    <p>Update all page meta descriptions</p>
                                    <div class="task-meta">
                                        <div class="task-labels">
                                            <span class="label" style="background: #e0e7ff; color: #3730a3;">SEO</span>
                                        </div>
                                        <div class="task-assignee">
                                            <div class="avatar" style="background: #a78bfa;">JD</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Column -->
                    <div class="board-column">
                        <div class="column-header">
                            <h3>In Review</h3>
                            <span class="task-count">2</span>
                        </div>
                        <div class="column-tasks">
                            <div class="task-card">
                                <div class="task-priority medium"></div>
                                <div class="task-content">
                                    <h4>Performance optimization</h4>
                                    <p>Improve page load time to < 2s</p>
                                    <div class="task-meta">
                                        <div class="task-labels">
                                            <span class="label" style="background: #dcfce7; color: #166534;">Development</span>
                                        </div>
                                        <div class="task-assignee">
                                            <div class="avatar" style="background: #fbbf24;">TS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Done Column -->
                    <div class="board-column">
                        <div class="column-header">
                            <h3>Done</h3>
                            <span class="task-count">5</span>
                        </div>
                        <div class="column-tasks">
                            <div class="task-card completed">
                                <div class="task-priority low"></div>
                                <div class="task-content">
                                    <h4>Setup analytics tracking</h4>
                                    <p>Integrate Google Analytics 4</p>
                                    <div class="task-meta">
                                        <div class="task-labels">
                                            <span class="label" style="background: #f3e8ff; color: #6b21a8;">Analytics</span>
                                        </div>
                                        <div class="task-assignee">
                                            <div class="avatar" style="background: #c084fc;">RM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="task-card completed">
                                <div class="task-priority medium"></div>
                                <div class="task-content">
                                    <h4>Design system documentation</h4>
                                    <p>Document all components and patterns</p>
                                    <div class="task-meta">
                                        <div class="task-labels">
                                            <span class="label" style="background: #dbeafe; color: #1e40af;">Design</span>
                                        </div>
                                        <div class="task-assignee">
                                            <div class="avatar" style="background: #f472b6;">SK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Feed -->
            <div class="activity-section">
                <h2>Recent Activity</h2>
                <div class="activity-feed">
                    <div class="activity-item">
                        <div class="activity-avatar" style="background: #f472b6;">SK</div>
                        <div class="activity-content">
                            <p><strong>Sarah Kim</strong> completed <span class="activity-link">Design system documentation</span></p>
                            <span class="activity-time">2 hours ago</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-avatar" style="background: #34d399;">AL</div>
                        <div class="activity-content">
                            <p><strong>Alex Lee</strong> started working on <span class="activity-link">Mobile responsive optimization</span></p>
                            <span class="activity-time">4 hours ago</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-avatar" style="background: #60a5fa;">MJ</div>
                        <div class="activity-content">
                            <p><strong>Mike Johnson</strong> added a new task <span class="activity-link">Create product comparison table</span></p>
                            <span class="activity-time">5 hours ago</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-avatar" style="background: #c084fc;">RM</div>
                        <div class="activity-content">
                            <p><strong>Rachel Martinez</strong> completed <span class="activity-link">Setup analytics tracking</span></p>
                            <span class="activity-time">1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>