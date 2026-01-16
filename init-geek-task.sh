#!/bin/bash

# ==========================================
# Geek Task Generator (Reusable)
# PHP & Laravel Backend Engineering
# ==========================================

# Default path (Week 1)
BASE_PATH="weeks/week-01-php-fundamentals/geek-task"

# Allow custom path as argument
if [ ! -z "$1" ]; then
  BASE_PATH="$1"
fi

echo "⚙️ Initializing Geek Task structure at:"
echo "📁 $BASE_PATH"

# Create base directory
mkdir -p "$BASE_PATH"

# Create standard Geek Task files
cat <<EOF > "$BASE_PATH/README.md"
# Geek Task – Applied Challenge

## Objective
This task is designed to test your ability to apply what you learned this week
to a real-world, education-focused backend problem.

## Rules
- Use only concepts covered this week
- No frameworks unless stated
- Write clean, readable code
- Think like a backend engineer solving a real problem

## Deliverables
- Source code
- Short explanation (README or comments)

## Evaluation Focus
- Logic & correctness
- Proper use of concepts
- Code clarity
- Problem-solving approach
EOF

cat <<EOF > "$BASE_PATH/task-brief.md"
# Task Brief

## Problem Statement
Describe the real-world problem students must solve.

## Context
Explain where this system would be used (education, admin, platform, etc).

## Requirements
- Requirement 1
- Requirement 2
- Requirement 3

## Constraints
- Allowed tools
- Disallowed tools

## Expected Outcome
What a successful solution should demonstrate.
EOF

cat <<EOF > "$BASE_PATH/submission-guidelines.md"
# Submission Guidelines

## Folder Structure
Students must submit inside their personal folder:
students/<student-name>/week-XX/

## Rules
- One submission per student
- No plagiarism
- Code must run without errors

## Naming Convention
Use clear and descriptive file names.
EOF

cat <<EOF > "$BASE_PATH/mentor-review.md"
# Mentor Review Template

## Student Name:
## Week:

### Code Quality
- [ ] Poor
- [ ] Fair
- [ ] Good
- [ ] Excellent

### Logic & Understanding
Comments:

### Improvements Suggested
- 

### Final Verdict
- [ ] Needs Improvement
- [ ] Passed
- [ ] Excellent
EOF

echo "✅ Geek Task structure created successfully!"
echo "🧠 Ready to define the task and assign to students."
